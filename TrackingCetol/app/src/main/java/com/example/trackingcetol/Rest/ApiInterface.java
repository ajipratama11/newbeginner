package com.example.trackingcetol.Rest;

/**
 * Created by root on 2/3/17.
 */

import com.example.trackingcetol.Model.GetHarga;
import com.example.trackingcetol.Model.ListHarga;
import com.example.trackingcetol.Model.PostPutDelKontak;
import com.example.trackingcetol.Model.PostSaran;
import com.example.trackingcetol.Model.TampilCek;

import retrofit2.Call;
import retrofit2.http.Field;
import retrofit2.http.FormUrlEncoded;
import retrofit2.http.GET;
import retrofit2.http.HTTP;
import retrofit2.http.POST;
import retrofit2.http.PUT;

public interface ApiInterface {
    @GET("listbarang")
    Call<GetHarga> getHarga();

    @FormUrlEncoded
    @POST("ambilstatus")
    Call<TampilCek> postKontak(@Field("id_pesan") String id_pesan);

    @FormUrlEncoded
    @POST("post_saran")
    Call<PostSaran> postSaran (@Field("nama") String nama,
                               @Field("email") String email,
                               @Field("saran") String saran);

    @FormUrlEncoded
    @PUT("kontak")
    Call<PostPutDelKontak> putKontak(@Field("id") String id,
                                     @Field("nama") String nama,
                                     @Field("nomor") String nomor);
    @FormUrlEncoded
    @HTTP(method = "DELETE", path = "kontak", hasBody = true)
    Call<PostPutDelKontak> deleteKontak(@Field("id") String id);
}