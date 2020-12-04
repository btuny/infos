package hwid.hwidmanager;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
	protected static Logger	_log = Logger.getLogger(HWID.class.getName());
	private static HWID _instance;
	public static Map<Integer, HWIDInfoList> _listHWID;
	
	public HWID()
