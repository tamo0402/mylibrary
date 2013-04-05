<?php

    /**
     * フレームワークのコアにぶちこんで$this->で使ってたのでメソッドになってます。
     * $paramには2進数の合計が入るよ！
     * 
	 * 権限をセットするメソッド。
	 */
	public function setAuth($param) {

	    $result = array();

	    if (1 === (1  & $param)) {
	        $result[] = 1;
	    }
	    if (2 === (2  & $param)) {
	        $result[] = 2;
	    }
	    if (4 === (4  & $param)) {
	        $result[] = 3;
	    }
	    if (8 === (8  & $param)) {
	        $result[] = 4;
	    }
	    if (16 === (16 & $param)) {
	        $result[] = 5;
	    }
	    return $result;
	}


	/**
	 * フレームワークのコアにぶちこんで$this->で使ってたのでメソッドになってます。
	 * 権限をチェックするメソッド。
	 */
	public function chkAuth($params) {
        $userSession = Session::get('xxxxx.com');

        if (isset($userSession) && in_array($params, $userSession["auth"])) {
            return true;
        }
        // ログアウトしてトップページへ飛ばす。
        Response::redirect('http://xxxxx.com', 'refresh', 200);
	}