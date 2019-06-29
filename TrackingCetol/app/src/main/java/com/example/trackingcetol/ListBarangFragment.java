package com.example.trackingcetol;


import android.content.Context;
import android.graphics.drawable.Drawable;
import android.os.Bundle;
import android.support.v4.app.Fragment;
import android.support.v4.content.ContextCompat;
import android.support.v7.widget.GridLayoutManager;
import android.support.v7.widget.RecyclerView;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;

import com.example.trackingcetol.Adapter.ItemAdapter;
import com.example.trackingcetol.Model.GetHarga;
//import com.example.trackingcetol.Model.ListHarga;
import com.example.trackingcetol.Model.ListHarga;
import com.example.trackingcetol.Rest.ApiClient;
import com.example.trackingcetol.Rest.ApiInterface;

import java.util.List;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;


public class ListBarangFragment extends Fragment {

    ApiInterface mApiInterface;
    private RecyclerView mRecyclerView;
    private RecyclerView.Adapter mAdapter;
    private RecyclerView.LayoutManager mLayoutManager;
    public static ListBarangFragment ma;
    public ListBarangFragment() {
        // Required empty public constructor
    }


    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        // Inflate the layout for this fragment
        View myFragmentView = inflater.inflate(R.layout.fragment_recycler, container, false);

        mRecyclerView = (RecyclerView) myFragmentView.findViewById(R.id.recyclerView);
        mLayoutManager = new GridLayoutManager(getActivity(),2);
        mRecyclerView.setLayoutManager(mLayoutManager);
        mApiInterface = ApiClient.getClient().create(ApiInterface.class);

        refresh();
        return myFragmentView;
    }
    public void refresh() {
        Call<GetHarga> ListHarga = mApiInterface.getHarga();
        ListHarga.enqueue(new Callback<GetHarga>() {
            @Override
            public void onResponse(Call<GetHarga> call, Response<GetHarga>
                    response) {
                List<ListHarga> itemList = response.body().getListDataHarga();
                Log.d("Retrofit Get", "Jumlah data Item: " +
                        String.valueOf(itemList.size()));
                mAdapter = new ItemAdapter(itemList, getContext());
                mRecyclerView.setAdapter(mAdapter);
            }

            @Override
            public void onFailure(Call<GetHarga> call, Throwable t) {
                Log.e("Retrofit Get", t.toString());
            }
        });
    }

}