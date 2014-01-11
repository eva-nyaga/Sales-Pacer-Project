package com.slales;

import android.content.Context;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteDatabase.CursorFactory;
import android.database.sqlite.SQLiteOpenHelper;

public class SQLEngine {
	public static final String KEY_ROWID="_id";
	public static final String KEY_PHONE="_phone";
	public static final String KEY_TIME="_time";
	public static final String KEY_DATE="_date";
	
	
	private static final String DB_NAME="sales";
	private static final String DB_TABLE="calls";
	private final static int DB_VERSION=1;
	
	private DBEngine engine;
	private final Context ctx;
	private SQLiteDatabase mSqlDb;
	
	private static class DBEngine extends SQLiteOpenHelper{

		public DBEngine(Context context) {
			super(context, DB_NAME, null, DB_VERSION);
			// TODO Auto-generated constructor stub
		}

		@Override
		public void onCreate(SQLiteDatabase db) {
			// TODO Auto-generated method stub
			db.execSQL("CREATE TABLE "+DB_TABLE+ " (" +
					KEY_ROWID + "INTERGER PRIMARY KEY AUTOINCREMENT, " +
					KEY_PHONE + "TEXT, " +
					KEY_TIME + "TIME, " +
					KEY_DATE + "DATE);" 
					
					);
		}

		@Override
		public void onUpgrade(SQLiteDatabase db, int oldVersion, int newVersion) {
			// TODO Auto-generated method stub
			db.execSQL("DROP TABLE IF EXISTS "+ DB_TABLE);
			onCreate(db);
		}
			 
	}
	
	public SQLEngine(Context c) {
		ctx=c;
	}
	public SQLEngine open() {
		engine=new DBEngine(ctx);
		mSqlDb=engine.getWritableDatabase();
		return this;
	}
	public SQLEngine close() {
		engine.close();
		return this;
	}
	public void createEntry(String numberToDial) {
		// TODO Auto-generated method stub
		
	}

}
