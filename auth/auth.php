<?php

    /**
     * �t���[�����[�N�̃R�A�ɂԂ������$this->�Ŏg���Ă��̂Ń��\�b�h�ɂȂ��Ă܂��B
     * $param�ɂ�2�i���̍��v�������I
     * 
	 * �������Z�b�g���郁�\�b�h�B
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
	 * �t���[�����[�N�̃R�A�ɂԂ������$this->�Ŏg���Ă��̂Ń��\�b�h�ɂȂ��Ă܂��B
	 * �������`�F�b�N���郁�\�b�h�B
	 */
	public function chkAuth($params) {
        $userSession = Session::get('xxxxx.com');

        if (isset($userSession) && in_array($params, $userSession["auth"])) {
            return true;
        }
        // ���O�A�E�g���ăg�b�v�y�[�W�֔�΂��B
        Response::redirect('http://xxxxx.com', 'refresh', 200);
	}