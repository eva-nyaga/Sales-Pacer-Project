package com.slales;

import android.os.Bundle;
import android.app.Activity;
import android.content.Intent;
import android.graphics.Typeface;
import android.view.Menu;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.Button;
import android.widget.TextView;

public class MainActivity extends Activity implements OnClickListener {
	Button btn1, btn2, btn4;
	Typeface font;
	TextView welcomeTxt;

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_main);
		
		btn4 = (Button) findViewById(R.id.btn_prefs);
		btn4.setOnClickListener(this);
		welcomeTxt=(TextView) findViewById(R.id.welcome);
		
		font=Typeface.createFromAsset(getAssets(), "FREESCPT.TTF");
		welcomeTxt.setTypeface(font);
	}

	@Override
	public boolean onCreateOptionsMenu(Menu menu) {
		// Inflate the menu; this adds items to the action bar if it is present.
		getMenuInflater().inflate(R.menu.main, menu);
		return true;
	}

	@Override
	public void onClick(View v) {
		// TODO Auto-generated method stub
switch (v.getId()) {
		
		case R.id.btn_prefs:
			Intent prefs=new Intent(this,PrefsActivity.class);
			startActivity(prefs);
			break;
			
		default:
			break;
		}
		
	}

}
