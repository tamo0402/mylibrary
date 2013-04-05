<?php

    /**
     * フレームワークのコアにぶっこんで$this->で使ってたのでメソッド。
     * 権限をセットするメソッド。
     * $paramは持ってる権限の合計値。
     * 例）　1と3の権限持たせたいなら$paramは4
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
     * フレームワークのコアにぶっこんで$this->で使ってたのでメソッド。
     * 権限をチェックするメソッド。
     */
    public function chkAuth($params) {
        $userSession = Session::get('xxxx.com');

        if (isset($userSession) && in_array($params, $userSession["auth"])) {
            return true;
        }
        // ログアウトしてトップページへ飛ばす。
        Response::redirect('http://xxxx.com', 'refresh', 200);
    }
