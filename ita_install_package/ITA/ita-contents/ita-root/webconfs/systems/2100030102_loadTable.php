<?php
//   Copyright 2019 NEC Corporation
//
//   Licensed under the Apache License, Version 2.0 (the "License");
//   you may not use this file except in compliance with the License.
//   You may obtain a copy of the License at
//
//       http://www.apache.org/licenses/LICENSE-2.0
//
//   Unless required by applicable law or agreed to in writing, software
//   distributed under the License is distributed on an "AS IS" BASIS,
//   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
//   See the License for the specific language governing permissions and
//   limitations under the License.
//
//////////////////////////////////////////////////////////////////////
//
//  【処理概要】
//    ・WebDBCore機能を用いたWebページの中核設定を行う。
//
//////////////////////////////////////////////////////////////////////

$tmpFx = function (&$aryVariant=array(),&$arySetting=array()){
    global $g;

    $arrayWebSetting = array();
    //COBBLERインターフェース情報
    $arrayWebSetting['page_info'] = $g['objMTS']->getSomeMessage("ITACBLH-MNU-1001");

    $tmpAry = array(
        'TT_SYS_01_JNL_SEQ_ID'=>'JOURNAL_SEQ_NO',
        'TT_SYS_02_JNL_TIME_ID'=>'JOURNAL_REG_DATETIME',
        'TT_SYS_03_JNL_CLASS_ID'=>'JOURNAL_ACTION_CLASS',
        'TT_SYS_04_NOTE_ID'=>'NOTE',
        'TT_SYS_04_DISUSE_FLAG_ID'=>'DISUSE_FLAG',
        'TT_SYS_05_LUP_TIME_ID'=>'LAST_UPDATE_TIMESTAMP',
        'TT_SYS_06_LUP_USER_ID'=>'LAST_UPDATE_USER',
        'TT_SYS_NDB_ROW_EDIT_BY_FILE_ID'=>'ROW_EDIT_BY_FILE',
        'TT_SYS_NDB_UPDATE_ID'=>'WEB_BUTTON_UPDATE',
        'TT_SYS_NDB_LUP_TIME_ID'=>'UPD_UPDATE_TIMESTAMP'
    );

    //No.
    $table = new TableControlAgent('B_COBBLER_IF_INFO','COBBLER_IF_INFO_ID', $g['objMTS']->getSomeMessage("ITACBLH-MNU-1004"), 'B_COBBLER_IF_INFO_JNL', $tmpAry);
    $tmpAryColumn = $table->getColumns();
    $tmpAryColumn['COBBLER_IF_INFO_ID']->setSequenceID('B_COBBLER_IF_INFO_RIC');
    $tmpAryColumn['JOURNAL_SEQ_NO']->setSequenceID('B_COBBLER_IF_INFO_JSQ');
    unset($tmpAryColumn);

    // QMファイル名プレフィックス----COBBLERインターフェース情報
    $table->setDBMainTableLabel($g['objMTS']->getSomeMessage("ITACBLH-MNU-1002"));
    // エクセルのシート名------------COBBLERインターフェース情報
    $table->getFormatter('excel')->setGeneValue('sheetNameForEditByFile', $g['objMTS']->getSomeMessage("ITACBLH-MNU-1003"));

    //---- 検索機能の制御
    $table->setGeneObject('AutoSearchStart',true);  //('',true,false)
    // 検索機能の制御----



	$objVldt = new SingleTextValidator(1,256,false);
	//データリレイストレージパス(ITA)
    $c = new TextColumn('COBBLER_STORAGE_PATH_LNX',$g['objMTS']->getSomeMessage("ITACBLH-MNU-1005"));
    $c->setDescription($g['objMTS']->getSomeMessage("ITACBLH-MNU-1008"));//エクセル・ヘッダでの説明
	$c->setValidator($objVldt);
    $c->setRequired(true);//登録/更新時には、入力必須
    $table->addColumn($c);

    $table->fixColumn();

    $table->setGeneObject('webSetting', $arrayWebSetting);
    return $table;
};
loadTableFunctionAdd($tmpFx,__FILE__);
unset($tmpFx);
?>
