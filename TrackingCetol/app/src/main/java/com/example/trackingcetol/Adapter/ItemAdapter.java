package com.example.trackingcetol.Adapter;

import android.content.Context;
import android.content.Intent;
import android.support.v7.widget.RecyclerView;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.TextView;


import com.example.trackingcetol.DetailListHarga;
import com.example.trackingcetol.Model.GetHarga;
import com.example.trackingcetol.Model.ListHarga;
import com.example.trackingcetol.R;
import com.squareup.picasso.Picasso;

import java.util.List;

//import com.example.customshirt.EditActivity;


public class ItemAdapter extends RecyclerView.Adapter<ItemAdapter.MyViewHolder> {
    List<ListHarga> mItemList;
    Context context;


    public ItemAdapter(List<ListHarga> itemList, Context context) {
        mItemList = itemList;
        this.context=context;
    }

    @Override
    public MyViewHolder onCreateViewHolder(ViewGroup parent, int viewType) {
        View mView = LayoutInflater.from(parent.getContext()).inflate(R.layout.item_list, parent, false);
        MyViewHolder mViewHolder = new MyViewHolder(mView);
        return mViewHolder;
    }

    @Override
    public void onBindViewHolder(MyViewHolder holder, final int position) {

        holder.mTextViewNama.setText(mItemList.get(position).getNama_barang());
        holder.mTextViewHarga.setText(mItemList.get(position).getJenis_barang());
        holder.mTextViewId.setText("RP." + mItemList.get(position).getHarga_barang());
        final String urlGambarBerita = "http://192.168.43.75/cetol/assets/img/barang/" + mItemList.get(position).getGambar();
        Picasso.with(context).load(urlGambarBerita).into(holder.imageView);
        holder.itemView.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent mIntent = new Intent(view.getContext(), DetailListHarga.class);
                mIntent.putExtra("Nama Barang", mItemList.get(position).getNama_barang());
                mIntent.putExtra("Jenis Barang", mItemList.get(position).getJenis_barang());
                mIntent.putExtra("Jenis Kertas", mItemList.get(position).getJenis_kertas());
                mIntent.putExtra("Gambar", mItemList.get(position).getGambar());
                mIntent.putExtra("Harga Barang","Rp." + mItemList.get(position).getHarga_barang());
                view.getContext().startActivity(mIntent);
            }
        });

    }

    @Override
    public int getItemCount() {
        return mItemList.size();
    }

    public class MyViewHolder extends RecyclerView.ViewHolder {
        public TextView mTextViewId, mTextViewNama, mTextViewHarga;
        public ImageView imageView;

        public MyViewHolder(View itemView) {
            super(itemView);
            mTextViewId = (TextView) itemView.findViewById(R.id.tvId);
            mTextViewNama = (TextView) itemView.findViewById(R.id.tvNama);
            mTextViewHarga = (TextView) itemView.findViewById(R.id.tvHarga);
            imageView = (ImageView) itemView.findViewById(R.id.item_gambar);
        }
    }
}
