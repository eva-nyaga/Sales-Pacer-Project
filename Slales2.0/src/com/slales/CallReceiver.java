package com.slales;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.util.ArrayList;
import java.util.List;

import org.apache.http.HttpResponse;
import org.apache.http.NameValuePair;
import org.apache.http.client.ClientProtocolException;
import org.apache.http.client.HttpClient;
import org.apache.http.client.entity.UrlEncodedFormEntity;
import org.apache.http.client.methods.HttpPost;
import org.apache.http.impl.client.DefaultHttpClient;
import org.apache.http.message.BasicNameValuePair;

import android.os.Bundle;
import android.preference.PreferenceManager;
import android.app.Activity;
import android.content.BroadcastReceiver;
import android.content.Context;
import android.content.Intent;
import android.content.SharedPreferences;
import android.util.Log;
import android.view.Menu;
import android.widget.Toast;

public class CallReceiver extends BroadcastReceiver {
	//private static String url_create_user = "http://192.168.43.8/DAI/text.php";

	private static String url_create_user ;


	@Override
	public void onReceive(Context context, Intent intent) {
		// TODO Auto-generated method stub
		 if (intent.getAction().equals(Intent.ACTION_NEW_OUTGOING_CALL)) {
			 // Phone number 
	         String number = intent.getStringExtra(Intent.EXTRA_PHONE_NUMBER);
                // Ringing state
                // This code will execute when the phone has an incoming call
               // Toast.makeText(context, number, Toast.LENGTH_SHORT).show();
	         SharedPreferences prefs=PreferenceManager.getDefaultSharedPreferences(context);
               url_create_user =prefs.getString("adress", "");
               
               Toast.makeText(context, url_create_user, Toast.LENGTH_SHORT).show();
                
                HttpClient httpclient = new DefaultHttpClient();
                
                
                HttpPost httppost = new HttpPost("http://"+url_create_user+"/DAI/text.php");
                
                
                try {
                    // Add user phone
                    List<NameValuePair> nameValuePairs = new ArrayList<NameValuePair>(2);
                    nameValuePairs.add(new BasicNameValuePair("number",number));
                    
                    httppost.setEntity(new UrlEncodedFormEntity(nameValuePairs));
         
                    // Execute HTTP Post Request
                    Log.w("SENCIDE", "Execute HTTP Post Request");
                    HttpResponse response = httpclient.execute(httppost);
                     
                    String str = inputStreamToString(response.getEntity().getContent()).toString();
                    Log.w("SENCIDE", str);
                     
                    if(str.toString().equalsIgnoreCase("true"))
                    {
                     Log.w("SENCIDE", "TRUE");
                   //Toast.makeText( context, "Successful", Toast.LENGTH_LONG). show();  
                    }else
                    {
                     Log.w("SENCIDE", "FALSE");
                    // Toast.makeText( context, "Not Successful", Toast.LENGTH_LONG). show();            
                    }
         
                } catch (ClientProtocolException e) {
                 e.printStackTrace();
                } catch (IOException e) {
                 e.printStackTrace();
                }
                     
                }
	}
	private StringBuilder inputStreamToString(InputStream is) {
	     String line = "";
	     StringBuilder total = new StringBuilder();
	     // Wrap a BufferedReader around the InputStream
	     BufferedReader rd = new BufferedReader(new InputStreamReader(is));
	     // Read response until the end
	     try {
	      while ((line = rd.readLine()) != null) { 
	        total.append(line); 
	      }
	     } catch (IOException e) {
	      e.printStackTrace();
	     }
	     // Return full string
	     return total;
	    }
		
	}

	


