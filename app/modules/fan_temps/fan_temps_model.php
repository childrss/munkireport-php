<?php

use CFPropertyList\CFPropertyList;

class Fan_temps_model extends \Model {
    
	function __construct($serial='')
	{
		parent::__construct('id', 'fan_temps'); //primary key, tablename
		$this->rs['id'] = 0;
		$this->rs['serial_number'] = $serial; $this->rt['serial_number'] = 'VARCHAR(255) UNIQUE';
		$this->rs['fan_0'] = 0;
		$this->rs['fan_1'] = 0;
		$this->rs['fan_2'] = 0;
		$this->rs['fan_3'] = 0;
		$this->rs['fan_4'] = 0;
		$this->rs['fan_5'] = 0;
		$this->rs['fan_6'] = 0;
		$this->rs['fan_7'] = 0;
		$this->rs['fan_8'] = 0;
		$this->rs['fanmin0'] = 0;
		$this->rs['fanmin1'] = 0;
		$this->rs['fanmin2'] = 0;
		$this->rs['fanmin3'] = 0;
		$this->rs['fanmin4'] = 0;
		$this->rs['fanmin5'] = 0;
		$this->rs['fanmin6'] = 0;
		$this->rs['fanmin7'] = 0;
		$this->rs['fanmin8'] = 0;
		$this->rs['fanmax0'] = 0;
		$this->rs['fanmax1'] = 0;
		$this->rs['fanmax2'] = 0;
		$this->rs['fanmax3'] = 0;
		$this->rs['fanmax4'] = 0;
		$this->rs['fanmax5'] = 0;
		$this->rs['fanmax6'] = 0;
		$this->rs['fanmax7'] = 0;
		$this->rs['fanmax8'] = 0;
		$this->rs['fanlabel0'] = "";
		$this->rs['fanlabel1'] = "";
		$this->rs['fanlabel2'] = "";
		$this->rs['fanlabel3'] = "";
		$this->rs['fanlabel4'] = "";
		$this->rs['fanlabel5'] = "";
		$this->rs['fanlabel6'] = "";
		$this->rs['fanlabel7'] = "";
		$this->rs['fanlabel8'] = "";
		$this->rs['discin'] = "";
		$this->rs['ta0p'] = 0.0;
		$this->rs['ta1p'] = 0.0;
		$this->rs['ta2p'] = 0.0;
		$this->rs['ta0p2'] = 0.0;
		$this->rs['ta1p2'] = 0.0;
		$this->rs['ta0g'] = 0.0;
		$this->rs['ta2g'] = 0.0;
		$this->rs['ta0s'] = 0.0;
		$this->rs['ta1s'] = 0.0;
		$this->rs['ta2s'] = 0.0;
		$this->rs['ta3s'] = 0.0;
		$this->rs['ta4s'] = 0.0;
		$this->rs['ta5s'] = 0.0;
		$this->rs['talc'] = 0.0;
		$this->rs['tarc'] = 0.0;
		$this->rs['tb0p'] = 0.0;
		$this->rs['tb0t'] = 0.0;
		$this->rs['tb1t'] = 0.0;
		$this->rs['tb2t'] = 0.0;
		$this->rs['tb3t'] = 0.0;
		$this->rs['tbxt'] = 0.0;
		$this->rs['tc0c'] = 0.0;
		$this->rs['tc0d'] = 0.0;
		$this->rs['tc0d2'] = 0.0;
		$this->rs['tc0e'] = 0.0;
		$this->rs['tc0f'] = 0.0;
		$this->rs['tc0g'] = 0.0;
		$this->rs['tc0h'] = 0.0;
		$this->rs['tc0j'] = 0.0;
		$this->rs['tc0p'] = 0.0;
		$this->rs['tc0p2'] = 0.0;
		$this->rs['tc1c'] = 0.0;
		$this->rs['tc1d'] = 0.0;
		$this->rs['tc1e'] = 0.0;
		$this->rs['tc1f'] = 0.0;
		$this->rs['tc1h'] = 0.0;
		$this->rs['tc1p'] = 0.0;
		$this->rs['tc2c'] = 0.0;
		$this->rs['tc2p'] = 0.0;
		$this->rs['tc3c'] = 0.0;
		$this->rs['tc3p'] = 0.0;
		$this->rs['tc4c'] = 0.0;
		$this->rs['tc5c'] = 0.0;
		$this->rs['tc6c'] = 0.0;
		$this->rs['tc7c'] = 0.0;
		$this->rs['tc8c'] = 0.0;
		$this->rs['tc0c2'] = 0.0;
		$this->rs['tc1c2'] = 0.0;
		$this->rs['tc2c2'] = 0.0;
		$this->rs['tc3c2'] = 0.0;
		$this->rs['tc2d'] = 0.0;
		$this->rs['tcac'] = 0.0;
		$this->rs['tcad'] = 0.0;
		$this->rs['tcag'] = 0.0;
		$this->rs['tcah'] = 0.0;
		$this->rs['tcas'] = 0.0;
		$this->rs['tcbc'] = 0.0;
		$this->rs['tcbd'] = 0.0;
		$this->rs['tcbg'] = 0.0;
		$this->rs['tcbh'] = 0.0;
		$this->rs['tcbs'] = 0.0;
		$this->rs['tcfp'] = 0.0;
		$this->rs['tcgc'] = 0.0;
		$this->rs['tcgc2'] = 0.0;
		$this->rs['tchp'] = 0.0;
		$this->rs['tcpg'] = 0.0;
		$this->rs['tcsa'] = 0.0;
		$this->rs['tcsc'] = 0.0;
		$this->rs['tcsc2'] = 0.0;
		$this->rs['tctd'] = 0.0;
		$this->rs['tcxc'] = 0.0;
		$this->rs['tcxc2'] = 0.0;
		$this->rs['tcsr'] = 0.0;
		$this->rs['te0t'] = 0.0;
		$this->rs['te1f'] = 0.0;
		$this->rs['te1p'] = 0.0;
		$this->rs['te1s'] = 0.0;
		$this->rs['te2f'] = 0.0;
		$this->rs['te2s'] = 0.0;
		$this->rs['te3f'] = 0.0;
		$this->rs['te3s'] = 0.0;
		$this->rs['te4f'] = 0.0;
		$this->rs['te4s'] = 0.0;
		$this->rs['te5f'] = 0.0;
		$this->rs['te5s'] = 0.0;
		$this->rs['tegg'] = 0.0;
		$this->rs['tegp'] = 0.0;
		$this->rs['terg'] = 0.0;
		$this->rs['tetp'] = 0.0;
		$this->rs['tg0d'] = 0.0;
		$this->rs['tg0g'] = 0.0;
		$this->rs['tg0h'] = 0.0;
		$this->rs['tg0p'] = 0.0;
		$this->rs['tg0p2'] = 0.0;
		$this->rs['tg0r'] = 0.0;
		$this->rs['tg0t'] = 0.0;
		$this->rs['tg1d'] = 0.0;
		$this->rs['tg1f'] = 0.0;
		$this->rs['tg1h'] = 0.0;
		$this->rs['tg1d2'] = 0.0;
		$this->rs['tg1p'] = 0.0;
		$this->rs['tg1r'] = 0.0;
		$this->rs['tgtc'] = 0.0;
		$this->rs['tgtd'] = 0.0;
		$this->rs['tgvp'] = 0.0;
		$this->rs['th0a'] = 0.0;
		$this->rs['th0a2'] = 0.0;
		$this->rs['th0b'] = 0.0;
		$this->rs['th0b2'] = 0.0;
		$this->rs['th0c'] = 0.0;
		$this->rs['th0c2'] = 0.0;
		$this->rs['th0f'] = 0.0;
		$this->rs['th0h'] = 0.0;
		$this->rs['th0o'] = 0.0;
		$this->rs['th0p'] = 0.0;
		$this->rs['th0r'] = 0.0;
		$this->rs['th0v'] = 0.0;
		$this->rs['th0x'] = 0.0;
		$this->rs['th0x2'] = 0.0;;
		$this->rs['th1a'] = 0.0;
		$this->rs['th1a2'] = 0.0;
		$this->rs['th1b'] = 0.0;
		$this->rs['th1b2'] = 0.0;
		$this->rs['th1c'] = 0.0;
		$this->rs['th1c2'] = 0.0;
		$this->rs['th1f'] = 0.0;
		$this->rs['th1g'] = 0.0;
		$this->rs['th1h'] = 0.0;
		$this->rs['th1o'] = 0.0;
		$this->rs['th1p'] = 0.0;
		$this->rs['th1r'] = 0.0;
		$this->rs['th1v'] = 0.0;
		$this->rs['th1x'] = 0.0;
		$this->rs['th2f'] = 0.0;
		$this->rs['th2g'] = 0.0;
		$this->rs['th2h'] = 0.0;
		$this->rs['th2p'] = 0.0;
		$this->rs['th2v'] = 0.0;
		$this->rs['th3f'] = 0.0;
		$this->rs['th3g'] = 0.0;
		$this->rs['th3p'] = 0.0;
		$this->rs['th3c'] = 0.0;
		$this->rs['th4f'] = 0.0;
		$this->rs['th4p'] = 0.0;
		$this->rs['th4v'] = 0.0;
		$this->rs['thps'] = 0.0;
		$this->rs['thsp'] = 0.0;
		$this->rs['thtg'] = 0.0;
		$this->rs['ti0p'] = 0.0;
		$this->rs['ti0p2'] = 0.0;
		$this->rs['ti1p'] = 0.0;
		$this->rs['ti1p2'] = 0.0;
		$this->rs['tl0p'] = 0.0;
		$this->rs['tl0p2'] = 0.0;
		$this->rs['tl0v'] = 0.0;
		$this->rs['tl1v'] = 0.0;
		$this->rs['tl1p'] = 0.0;
		$this->rs['tl2v'] = 0.0;
		$this->rs['tlav'] = 0.0;
		$this->rs['tlbv'] = 0.0;
		$this->rs['tlcv'] = 0.0;
		$this->rs['tm0s'] = 0.0;
		$this->rs['tm0p'] = 0.0;
		$this->rs['tm0p2'] = 0.0;
		$this->rs['tm0p3'] = 0.0;
		$this->rs['tm0p4'] = 0.0;
		$this->rs['tm0r'] = 0.0;
		$this->rs['tm1p'] = 0.0;
		$this->rs['tm1r'] = 0.0;
		$this->rs['tm2p'] = 0.0;
		$this->rs['tm3p'] = 0.0;
		$this->rs['tm4p'] = 0.0;
		$this->rs['tm5p'] = 0.0;
		$this->rs['tm6p'] = 0.0;
		$this->rs['tm7p'] = 0.0;
		$this->rs['tm8p'] = 0.0;
		$this->rs['tm9p'] = 0.0;
		$this->rs['tm1s'] = 0.0;
		$this->rs['tm2s'] = 0.0;
		$this->rs['tm3s'] = 0.0;
		$this->rs['tm4s'] = 0.0;
		$this->rs['tm5s'] = 0.0;
		$this->rs['tm6s'] = 0.0;
		$this->rs['tm7s'] = 0.0;
		$this->rs['tm8s'] = 0.0;
		$this->rs['tm9s'] = 0.0;
		$this->rs['tmas'] = 0.0;
		$this->rs['tmbs'] = 0.0;
		$this->rs['tmcs'] = 0.0;
		$this->rs['tma1'] = 0.0;
		$this->rs['tma2'] = 0.0;
		$this->rs['tma3'] = 0.0;
		$this->rs['tma4'] = 0.0;
		$this->rs['tmap'] = 0.0;
		$this->rs['tmb1'] = 0.0;
		$this->rs['tmb2'] = 0.0;
		$this->rs['tmb3'] = 0.0;
		$this->rs['tmb4'] = 0.0;
		$this->rs['tmhs'] = 0.0;
		$this->rs['tmlb'] = 0.0;
		$this->rs['tmls'] = 0.0;
		$this->rs['tmps'] = 0.0;
		$this->rs['tmpv'] = 0.0;
		$this->rs['tmtg'] = 0.0;
		$this->rs['tn0c'] = 0.0;
		$this->rs['tn0d'] = 0.0;
		$this->rs['tn0h'] = 0.0;
		$this->rs['th0n'] = 0.0;
		$this->rs['tn0p'] = 0.0;
		$this->rs['tn1p'] = 0.0;
		$this->rs['tnfp'] = 0.0;
		$this->rs['tntg'] = 0.0;
		$this->rs['to0p'] = 0.0;
		$this->rs['tp0c'] = 0.0;
		$this->rs['tp0d'] = 0.0;
		$this->rs['tp0p'] = 0.0;
		$this->rs['tp0p2'] = 0.0;
		$this->rs['tp0t'] = 0.0;
		$this->rs['tp0g'] = 0.0;
		$this->rs['tp1c'] = 0.0;
		$this->rs['tp1g'] = 0.0;
		$this->rs['tp1p'] = 0.0;
		$this->rs['tp2g'] = 0.0;
		$this->rs['tp2h'] = 0.0;
		$this->rs['tp2p'] = 0.0;
		$this->rs['tp3h'] = 0.0;
		$this->rs['tp3p'] = 0.0;
		$this->rs['tp3v'] = 0.0;
		$this->rs['tp4p'] = 0.0;
		$this->rs['tp5p'] = 0.0;
		$this->rs['tpcd'] = 0.0;
		$this->rs['tpps'] = 0.0;
		$this->rs['tptg'] = 0.0;
		$this->rs['ts0c'] = 0.0;
		$this->rs['ts0g'] = 0.0;
		$this->rs['ts0s'] = 0.0;
		$this->rs['ts0p'] = 0.0;
		$this->rs['ts0v'] = 0.0;
		$this->rs['ts1p'] = 0.0;
		$this->rs['ts1s'] = 0.0;
		$this->rs['ts2p'] = 0.0;
		$this->rs['ts2s'] = 0.0;
		$this->rs['ts2v'] = 0.0;
		$this->rs['ttf0'] = 0.0;
		$this->rs['ttld'] = 0.0;
		$this->rs['ttrd'] = 0.0;
		$this->rs['tw0p'] = 0.0;
		$this->rs['tw0p2'] = 0.0;
		$this->rs['fnfd'] = 0;
		$this->rs['fnum'] = 0;
		$this->rs['mssf'] = 0;
		$this->rs['dba0'] = 0.0;
		$this->rs['dba1'] = 0.0;
		$this->rs['dba2'] = 0.0;
		$this->rs['dbah'] = 0.0;
		$this->rs['dbat'] = 0.0;
		$this->rs['aupo'] = 0;
		$this->rs['alsl'] = 0;
		$this->rs['msac'] = 0;
		$this->rs['msag'] = 0.0;
		$this->rs['msam'] = 0.0;
		$this->rs['msha'] = 0.0;
		$this->rs['msld'] = 0;
		$this->rs['hdbs'] = 0;
		$this->rs['mssd'] = 0;
		$this->rs['mssp'] = 0;
		$this->rs['mstc'] = 0;
		$this->rs['mstg'] = 0;
		$this->rs['mstm'] = 0;
		$this->rs['bnum'] = 0;
		$this->rs['natj'] = 0;
		$this->rs['nati'] = 0;
		$this->rs['lsof'] = 0;
		$this->rs['lspv'] = "";
		$this->rs['mo_x'] = 0.0;
		$this->rs['mo_y'] = 0.0;
		$this->rs['mo_z'] = 0.0;
		$this->rs['spht'] = 0;
		$this->rs['sph0'] = 0;
		$this->rs['sght'] = 0;
		$this->rs['sgtt'] = 0.0;
		$this->rs['sctg'] = 0.0;
		$this->rs['sgtg'] = 0.0;
		$this->rs['shtg'] = 0.0;
		$this->rs['sltg'] = 0.0;
		$this->rs['sltp'] = 0.0;
		$this->rs['sotg'] = 0.0;
		$this->rs['sptg'] = 0.0;
		$this->rs['slpt'] = 0.0;
		$this->rs['slst'] = 0.0;
		$this->rs['sppt'] = 0.0;
		$this->rs['spst'] = 0.0;
		$this->rs['ibac'] = 0.0;
		$this->rs['ib0p'] = 0.0;
		$this->rs['ib0l'] = 0.0;
		$this->rs['ib0r'] = 0.0;
		$this->rs['ipbf'] = 0.0;
		$this->rs['icmc'] = 0.0;
		$this->rs['ipbr'] = 0.0;
		$this->rs['icac'] = 0.0;
		$this->rs['icbc'] = 0.0;
		$this->rs['ics0'] = 0.0;
		$this->rs['ic0c'] = 0.0;
		$this->rs['ic1c'] = 0.0;
		$this->rs['ic2c'] = 0.0;
		$this->rs['ic3c'] = 0.0;
		$this->rs['ic4c'] = 0.0;
		$this->rs['ic5c'] = 0.0;
		$this->rs['ic6c'] = 0.0;
		$this->rs['ic7c'] = 0.0;
		$this->rs['ic3c'] = 0.0;
		$this->rs['ic5r'] = 0.0;
		$this->rs['ic0g'] = 0.0;
		$this->rs['icgc'] = 0.0;
		$this->rs['icgm'] = 0.0;
		$this->rs['icam'] = 0.0;
		$this->rs['ics1'] = 0.0;
		$this->rs['imcc'] = 0.0;
		$this->rs['ic0m'] = 0.0;
		$this->rs['ic8r'] = 0.0;
		$this->rs['ic0r'] = 0.0;
		$this->rs['icec'] = 0.0;
		$this->rs['icsc'] = 0.0;
		$this->rs['im3c'] = 0.0;
		$this->rs['ig0r'] = 0.0;
		$this->rs['ig0c'] = 0.0;
		$this->rs['ig1c'] = 0.0;
		$this->rs['ig0f'] = 0.0;
		$this->rs['ih1z'] = 0.0;
		$this->rs['ih2z'] = 0.0;
		$this->rs['ih3z'] = 0.0;
		$this->rs['ih4z'] = 0.0;
		$this->rs['ih05'] = 0.0;
		$this->rs['ih02'] = 0.0;
		$this->rs['ikbc'] = 0.0;
		$this->rs['ilcd'] = 0.0;
		$this->rs['iblc'] = 0.0;
		$this->rs['iblr'] = 0.0;
		$this->rs['im1c'] = 0.0;
		$this->rs['i18c'] = 0.0;
		$this->rs['id2r'] = 0.0;
		$this->rs['id0r'] = 0.0;
		$this->rs['id5r'] = 0.0;
		$this->rs['im0r'] = 0.0;
		$this->rs['im0c'] = 0.0;
		$this->rs['imas'] = 0.0;
		$this->rs['imbs'] = 0.0;
		$this->rs['io0r'] = 0.0;
		$this->rs['io3r'] = 0.0;
		$this->rs['io5r'] = 0.0;
		$this->rs['ie1s'] = 0.0;
		$this->rs['ie2s'] = 0.0;
		$this->rs['ie3s'] = 0.0;
		$this->rs['ie4s'] = 0.0;
		$this->rs['ieas'] = 0.0;
		$this->rs['iebs'] = 0.0;
		$this->rs['in0c'] = 0.0;
		$this->rs['iscc'] = 0.0;
		$this->rs['ip0c'] = 0.0;
		$this->rs['icmc'] = 0.0;
		$this->rs['ihir'] = 0.0;
		$this->rs['ihcc'] = 0.0;
		$this->rs['ihnc'] = 0.0;
		$this->rs['is1c'] = 0.0;
		$this->rs['if3c'] = 0.0;
		$this->rs['if5c'] = 0.0;
		$this->rs['iidc'] = 0.0;
		$this->rs['ihsc'] = 0.0;
		$this->rs['iulc'] = 0.0;
		$this->rs['iurc'] = 0.0;
		$this->rs['itpc'] = 0.0;
		$this->rs['itar'] = 0.0;
		$this->rs['it3c'] = 0.0;
		$this->rs['iapc'] = 0.0;
		$this->rs['ibtc'] = 0.0;
		$this->rs['pb0r'] = 0.0;
		$this->rs['pblc'] = 0.0;
		$this->rs['pcac'] = 0.0;
		$this->rs['pcbc'] = 0.0;
		$this->rs['pcam'] = 0.0;
		$this->rs['pc0c'] = 0.0;
		$this->rs['pc1c'] = 0.0;
		$this->rs['pc2c'] = 0.0;
		$this->rs['pc3c'] = 0.0;
		$this->rs['pc4c'] = 0.0;
		$this->rs['pc5c'] = 0.0;
		$this->rs['pc6c'] = 0.0;
		$this->rs['pc7c'] = 0.0;
		$this->rs['pcpd'] = 0.0;
		$this->rs['pcpg'] = 0.0;
		$this->rs['pcfc'] = 0.0;
		$this->rs['pcgm'] = 0.0;
		$this->rs['pmcc'] = 0.0;
		$this->rs['pcpc'] = 0.0;
		$this->rs['ptgr'] = 0.0;
		$this->rs['pcpr'] = 0.0;
		$this->rs['pc1r'] = 0.0;
		$this->rs['pc5r'] = 0.0;
		$this->rs['pcpl'] = 0.0;
		$this->rs['pcpt'] = 0.0;
		$this->rs['pctr'] = 0.0;
		$this->rs['pcec'] = 0.0;
		$this->rs['pcsc'] = 0.0;
		$this->rs['pd0r'] = 0.0;
		$this->rs['pg0r'] = 0.0;
		$this->rs['pg0c'] = 0.0;
		$this->rs['pgtr'] = 0.0;
		$this->rs['ph1z'] = 0.0;
		$this->rs['ph2z'] = 0.0;
		$this->rs['ph3z'] = 0.0;
		$this->rs['ph4z'] = 0.0;
		$this->rs['ph02'] = 0.0;
		$this->rs['ph05'] = 0.0;
		$this->rs['pd2r'] = 0.0;
		$this->rs['pp0r'] = 0.0;
		$this->rs['pc0r'] = 0.0;
		$this->rs['pd0r'] = 0.0;
		$this->rs['pd5r'] = 0.0;
		$this->rs['pdmr'] = 0.0;
		$this->rs['pm0r'] = 0.0;
		$this->rs['pmas'] = 0.0;
		$this->rs['pmbs'] = 0.0;
		$this->rs['ppsm'] = 0.0;
		$this->rs['pm0c'] = 0.0;
		$this->rs['pm1c'] = 0.0;
		$this->rs['po0r'] = 0.0;
		$this->rs['phnc'] = 0.0;
		$this->rs['po3r'] = 0.0;
		$this->rs['po5r'] = 0.0;
		$this->rs['ppbr'] = 0.0;
		$this->rs['pn1r'] = 0.0;
		$this->rs['pn0c'] = 0.0;
		$this->rs['pe1s'] = 0.0;
		$this->rs['pe2s'] = 0.0;
		$this->rs['pe3s'] = 0.0;
		$this->rs['pe4s'] = 0.0;
		$this->rs['peas'] = 0.0;
		$this->rs['pebs'] = 0.0;
		$this->rs['pp0c'] = 0.0;
		$this->rs['ptar'] = 0.0;
		$this->rs['ps1c'] = 0.0;
		$this->rs['phcc'] = 0.0;
		$this->rs['pdtr'] = 0.0;
		$this->rs['pstr'] = 0.0;
		$this->rs['pthc'] = 0.0;
		$this->rs['phpc'] = 0.0;
		$this->rs['v1r1'] = 0.0;
		$this->rs['vacc'] = 0.0;
		$this->rs['vv7s'] = 0.0;
		$this->rs['vbat'] = 0.0;
		$this->rs['vb0r'] = 0.0;
		$this->rs['vc1c'] = 0.0;
		$this->rs['vcs0'] = 0.0;
		$this->rs['vcac'] = 0.0;
		$this->rs['vcbc'] = 0.0;
		$this->rs['vc0c'] = 0.0;
		$this->rs['vc1c'] = 0.0;
		$this->rs['vc2c'] = 0.0;
		$this->rs['vc3c'] = 0.0;
		$this->rs['vc4c'] = 0.0;
		$this->rs['vc5c'] = 0.0;
		$this->rs['vc6c'] = 0.0;
		$this->rs['vc7c'] = 0.0;
		$this->rs['vc0g'] = 0.0;
		$this->rs['vn0c'] = 0.0;
		$this->rs['vc0m'] = 0.0;
		$this->rs['vs2c'] = 0.0;
		$this->rs['vcgc'] = 0.0;
		$this->rs['vcsc'] = 0.0;
		$this->rs['vv1r'] = 0.0;
		$this->rs['vcfr'] = 0.0;
		$this->rs['vg0r'] = 0.0;
		$this->rs['vg0c'] = 0.0;
		$this->rs['vg1c'] = 0.0;
		$this->rs['vg0f'] = 0.0;
		$this->rs['vv2s'] = 0.0;
		$this->rs['vr3r'] = 0.0;
		$this->rs['vs8c'] = 0.0;
		$this->rs['vh05'] = 0.0;
		$this->rs['vv1s'] = 0.0;
		$this->rs['vp0r'] = 0.0;
		$this->rs['vdr2'] = 0.0;
		$this->rs['vv9s'] = 0.0;
		$this->rs['vd8r'] = 0.0;
		$this->rs['vd5r'] = 0.0;
		$this->rs['vm0r'] = 0.0;
		$this->rs['vmas'] = 0.0;
		$this->rs['vmbs'] = 0.0;
		$this->rs['vn1r'] = 0.0;
				
		// Schema version, increment when creating a db migration
		$this->schema_version = 2;

		// Indexes to optimize queries
		$this->idx[] = array('serial_number');
		$this->idx[] = array('ta0p');
		$this->idx[] = array('tc0f');
		$this->idx[] = array('tc0d');
		$this->idx[] = array('tc0p');
		$this->idx[] = array('tb0t');
		$this->idx[] = array('tb1t');
		$this->idx[] = array('tb2t');
		$this->idx[] = array('tg0d');
		$this->idx[] = array('tg0h');
		$this->idx[] = array('tg0p');
		$this->idx[] = array('th0p');
		$this->idx[] = array('th0h');
		$this->idx[] = array('th1h');
		$this->idx[] = array('th2h');
		$this->idx[] = array('tm0s');
		$this->idx[] = array('tm0p');
		$this->idx[] = array('ts0p');
		$this->idx[] = array('tl0p');
		$this->idx[] = array('tm0p4');
		$this->idx[] = array('tn0h');
		$this->idx[] = array('tn0d');
		$this->idx[] = array('tn0p');
		$this->idx[] = array('tp0p');
		$this->idx[] = array('discin');
		$this->idx[] = array('fan_0');
		$this->idx[] = array('fan_1');
		$this->idx[] = array('fan_2');
		$this->idx[] = array('fan_3');
		$this->idx[] = array('fan_4');
		$this->idx[] = array('fan_5');
		$this->idx[] = array('fan_6');
		$this->idx[] = array('fan_7');
		$this->idx[] = array('fan_8');
		$this->idx[] = array('fanmin0');
		$this->idx[] = array('fanmin1');
		$this->idx[] = array('fanmin2');
		$this->idx[] = array('fanmin3');
		$this->idx[] = array('fanmin4');
		$this->idx[] = array('fanmin5');
		$this->idx[] = array('fanmin6');
		$this->idx[] = array('fanmin7');
		$this->idx[] = array('fanmin8');
		$this->idx[] = array('fanmax0');
		$this->idx[] = array('fanmax1');
		$this->idx[] = array('fanmax2');
		$this->idx[] = array('fanmax3');
		$this->idx[] = array('fanmax4');
		$this->idx[] = array('fanmax5');
		$this->idx[] = array('fanmax6');
		$this->idx[] = array('fanmax7');
		$this->idx[] = array('fanmax8');
		$this->idx[] = array('fanlabel0');
		$this->idx[] = array('fanlabel1');
		$this->idx[] = array('fanlabel2');
		$this->idx[] = array('fanlabel3');
		$this->idx[] = array('fanlabel4');
		$this->idx[] = array('fanlabel5');
		$this->idx[] = array('fanlabel6');
		$this->idx[] = array('fanlabel7');
		$this->idx[] = array('fanlabel8');
		
		// Create table if it does not exist
//		$this->create_table();
		
		if ($serial)
		{
			$this->retrieve_record($serial);
		}
		
		$this->serial = $serial;
    }

    /**
     * Process data sent by postflight
     *
     * @param plist data
     * @author tuxudo
     * 
     **/
    function process($data)
    {
		// If data is empty, throw error
		if (! $data) {
		    throw new Exception("Error Processing Fan_Temps Module Request: No data found", 1);
		}
		
		// Translate fan_temp strings to db fields
		$translate = array(
			'TA0P' => 'ta0p',
			'TA1P' => 'ta1p',
			'TC0F' => 'tc0f',
			'TC0D' => 'tc0d',
			'TC0H' => 'tc0h',
			'TC0P' => 'tc0p',
			'TB0T' => 'tb0t',
			'TB1T' => 'tb1t',
			'TB2T' => 'tb2t',
			'TB3T' => 'tb3t',
			'TG0D' => 'tg0d',
			'TG0H' => 'tg0h',
			'TG0P' => 'tg0p',
			'TH0P' => 'th0p',
			'Th0H' => 'th0h',
			'Th1H' => 'th1h',
			'Th2H' => 'th2h',
			'TM0S' => 'tm0s',
			'TM0P' => 'tm0p',
			'Ts0P' => 'ts0p',
			'TL0P' => 'tl0p',
			'Tm0P' => 'tm0p4',
			'TN0H' => 'tn0h',
			'TN0D' => 'tn0d',
			'TN0P' => 'tn0p',
			'TO0P' => 'to0p',
			'Tp0P' => 'tp0p',
			'TI0P' => 'ti0p',
			'TI1P' => 'ti1p',
			'TA0p' => 'ta0p2',
			'TA1p' => 'ta1p2',
			'TBXT' => 'tbxt',
			'TC0C' => 'tc0c2',
			'TC0E' => 'tc0e',
			'TC0G' => 'tc0g',
			'TC0J' => 'tc0j',
			'TC0c' => 'tc0c',
			'TC0d' => 'tc0d2',
			'TC0p' => 'tc0p2',
			'TC1C' => 'tc1c',
			'TC1c' => 'tc1c2',
			'TC2C' => 'tc2c',
			'TC2c' => 'tc2c2',
			'TC3C' => 'tc3c',
			'TC3c' => 'tc3c2',
			'TC4C' => 'tc4c',
			'TCAC' => 'tcac',
			'TCAD' => 'tcad',
			'TCAG' => 'tcag',
			'TCAH' => 'tcah',
			'TCAS' => 'tcas',
			'TCBC' => 'tcbc',
			'TCBD' => 'tcbd',
			'TCBG' => 'tcbg',
			'TCBH' => 'tcbh',
			'TCBS' => 'tcbs',
			'TCFP' => 'tcfp',
			'TCGC' => 'tcgc',
			'TCGc' => 'tcgc2',
			'TCPG' => 'tcpg',
			'TCSA' => 'tcsa',
			'TCSC' => 'tcsc',
			'TCSc' => 'tcsc2',
			'TCTD' => 'tctd',
			'TCXC' => 'tcxc',
			'TCXc' => 'tcxc2',
			'TCXr' => 'tcsr',
			'TG0p' => 'tg0p2',
			'TG1D' => 'tg1d',
			'TG1F' => 'tg1f',
			'TG1d' => 'tg1d2',
			'TGTC' => 'tgtc',
			'TGTD' => 'tgtd',
			'TH0A' => 'th0a',
			'TH0B' => 'th0b',
			'TH0C' => 'th0c',
			'TH0F' => 'th0f',
			'TH0O' => 'th0o',
			'TH0R' => 'th0r',
			'TH0V' => 'th0v',
			'TH0X' => 'th0x',
			'TH0a' => 'th0a2',
			'TH0b' => 'th0b2',
			'TH0c' => 'th0c2',
			'TH0x' => 'th0x2',
			'TH1A' => 'th1a',
			'TH1B' => 'th1b',
			'TH1C' => 'th1c',
			'TH1F' => 'th1f',
			'TH1O' => 'th1o',
			'TH1P' => 'th1p',
			'TH1V' => 'th1v',
			'TH1X' => 'th1x',
			'TH1a' => 'th1a2',
			'TH1b' => 'th1b2',
			'TH1c' => 'th1c2',
			'TH2F' => 'th2f',
			'TH2P' => 'th2p',
			'TH2V' => 'th2v',
			'TH3F' => 'th3f',
			'TH3P' => 'th3p',
			'TH3V' => 'th3c',
			'TH4F' => 'th4f',
			'TH4P' => 'th4p',
			'TH4V' => 'th4v',
			'THPS' => 'thps',
			'THSP' => 'thsp',
			'THTG' => 'thtg',
			'TI0p' => 'ti0p2',
			'TI1p' => 'ti1p2',
			'TL0V' => 'tl0v',
			'TL0p' => 'tl0p2',
			'TL1V' => 'tl1v',
			'TL2V' => 'tl2v',
			'TLAV' => 'tlav',
			'TLBV' => 'tlbv',
			'TLCV' => 'tlcv',
			'TM0p' => 'tm0p2',
			'TM1P' => 'tm1p',
			'TM2P' => 'tm2p',
			'TM3P' => 'tm3p',
			'TM4P' => 'tm4p',
			'TM5P' => 'tm5p',
			'TM6P' => 'tm6p',
			'TM7P' => 'tm7p',
			'TM8P' => 'tm8p',
			'TMA1' => 'tma1',
			'TMA2' => 'tma2',
			'TMA3' => 'tma3',
			'TMA4' => 'tma4',
			'TMB1' => 'tmb1',
			'TMB2' => 'tmb2',
			'TMB3' => 'tmb3',
			'TMB4' => 'tmb4',
			'TMBS' => 'tmbs',
			'TMHS' => 'tmhs',
			'TMLB' => 'tmlb',
			'TMLS' => 'tmls',
			'TMPS' => 'tmps',
			'TMPV' => 'tmpv',
			'TMTG' => 'tmtg',
			'TNFP' => 'tnfp',
			'TNTG' => 'tntg',
			'TO0p' => 'to0p2',
			'TP0p' => 'tp0p2',
			'TPCD' => 'tpcd',
			'TS0V' => 'ts0v',
			'TS2V' => 'ts2v',
			'TTF0' => 'ttf0',
			'TW0P' => 'tw0p',
			'TW0p' => 'tw0p2',
			'Te1F' => 'te1f',
			'Te1P' => 'te1p',
			'Te1S' => 'te1s',
			'Te2F' => 'te2f',
			'Te2S' => 'te2s',
			'Te3F' => 'te3f',
			'Te3S' => 'te3s',
			'Te4F' => 'te4f',
			'Te4S' => 'te4s',
			'Te5F' => 'te5f',
			'Te5S' => 'te5s',
			'TeGG' => 'tegg',
			'TeGP' => 'tegp',
			'TeRG' => 'terg',
			'TeRP' => 'tetp',
			'Tm0p' => 'tm0p3',
			'Tp0C' => 'tp0c',
			'Tp1C' => 'tp1c',
			'Tp1P' => 'tp1p',
			'Tp2H' => 'tp2h',
			'Tp3H' => 'tp3h',
			'Tp3v' => 'tp3v',
			'TpPS' => 'tpps',
			'TpTG' => 'tptg',
			'Ts0G' => 'ts0g',
			'Ts0S' => 'ts0s',
			'Ts1P' => 'ts1p',
			'Ts1S' => 'ts1s',
			'Ts2S' => 'ts2s',
			'Tsqf' => 'tsqf',
			'TA0S' => 'ta0s',
			'TA1S' => 'ta1s',
			'TA2S' => 'ta2s',
			'TA3S' => 'ta3s',
			'Tb0P' => 'tb0p',
			'TC1D' => 'tc1d',
			'TC1E' => 'tc1e',
			'TC1F' => 'tc1f',
			'TC1H' => 'tc1h',
			'TC1P' => 'tc1p',
			'TC5C' => 'tc5c',
			'TC6C' => 'tc6c',
			'TC7C' => 'tc7c',
			'TC8C' => 'tc8c',
			'TCHP' => 'tchp',
			'TG1H' => 'tg1h',
			'TM1S' => 'tm1s',
			'TM8S' => 'tm8s',
			'TM9P' => 'tm9p',
			'TM9S' => 'tm9s',
			'TN0C' => 'tn0c',
			'TN1P' => 'tn1p',
			'TP0D' => 'tp0d',
			'Tp2P' => 'tp2p',
			'Tp3P' => 'tp3p',
			'Tp4P' => 'tp4p',
			'Tp5P' => 'tp5p',
			'TS0C' => 'ts0c',
			'TL1p' => 'tl1p',
			'TGVP' => 'tgvp',
			'TaRC' => 'tarc',
			'TaLC' => 'talc',
			'TTRD' => 'ttrd',
			'TTLD' => 'ttld',
			'Th0N' => 'th0n',
			'TS2P' => 'ts2p',
			'TG0T' => 'tg0t',
			'TC2P' => 'tc2p',
			'TC3P' => 'tc3p',
			'TG0C' => 'tg0c',
			'TA2p' => 'ta2p',
			'TG0r' => 'tg0r',
			'TG1p' => 'tg1p',
			'TG1r' => 'tg1r',
			'TM0r' => 'tm0r',
			'TM1r' => 'tm1r',
			'Te0t' => 'te0t',
			'Tp0t' => 'tp0t',
			'TMAP' => 'tamp',
			'TH1R' => 'th1r',
			'TA0G' => 'ta0g',
			'TA2G' => 'ta2g',
			'TA4S' => 'ta4s',
			'TA5S' => 'ta5s',
			'TC2D' => 'tc2d',
			'TG0G' => 'tg0g',
			'TH1G' => 'th1g',
			'TH2G' => 'th2g',
			'TH3G' => 'th3g',
			'TM2S' => 'tm2s',
			'TM3S' => 'tm3s',
			'TM4S' => 'tm4s',
			'TM5S' => 'tm5s',
			'TM6S' => 'tm6s',
			'TM7S' => 'tm7s',
			'TMAS' => 'tmas',
			'TMCS' => 'tmcs',
			'Tp0G' => 'tp0g',
			'Tp1G' => 'tp1g',
			'Tp2G' => 'tp2g',
			'FAN_0_Label' => 'fanlabel0',
			'FAN_1_Label' => 'fanlabel1',
			'FAN_2_Label' => 'fanlabel2',
			'FAN_3_Label' => 'fanlabel3',
			'FAN_4_Label' => 'fanlabel4',
			'FAN_5_Label' => 'fanlabel5',
			'FAN_6_Label' => 'fanlabel6',
			'FAN_7_Label' => 'fanlabel7',
			'FAN_8_Label' => 'fanlabel8',
			'FAN_0_Current' => 'fan_0',
			'FAN_1_Current' => 'fan_1',
			'FAN_2_Current' => 'fan_2',
			'FAN_3_Current' => 'fan_3',
			'FAN_4_Current' => 'fan_4',
			'FAN_5_Current' => 'fan_5',
			'FAN_6_Current' => 'fan_6',
			'FAN_7_Current' => 'fan_7',
			'FAN_8_Current' => 'fan_8',
			'FAN_0_Min' => 'fanmin0',
			'FAN_1_Min' => 'fanmin1',
			'FAN_2_Min' => 'fanmin2',
			'FAN_3_Min' => 'fanmin3',
			'FAN_4_Min' => 'fanmin4',
			'FAN_5_Min' => 'fanmin5',
			'FAN_6_Min' => 'fanmin6',
			'FAN_7_Min' => 'fanmin7',
			'FAN_8_Min' => 'fanmin8',
			'FAN_0_Max' => 'fanmax0',
			'FAN_1_Max' => 'fanmax1',
			'FAN_2_Max' => 'fanmax2',
			'FAN_3_Max' => 'fanmax3',
			'FAN_4_Max' => 'fanmax4',
			'FAN_5_Max' => 'fanmax5',
			'FAN_6_Max' => 'fanmax6',
			'FAN_7_Max' => 'fanmax7',
			'FAN_8_Max' => 'fanmax8',
		    'ALSL' => 'alsl',
		    'AUPO' => 'aupo',
		    'BNum' => 'bnum',
		    'FNum' => 'fnum',
		    'FNFD' => 'fnfd',
		    'IC0C' => 'ic0c',
		    'IC1C' => 'ic1c',
		    'IC2C' => 'ic2c',
		    'IC3C' => 'ic3c',
		    'IC4C' => 'ic4c',
		    'IC5C' => 'ic5c',
		    'IC6C' => 'ic6c',
		    'IC7C' => 'ic7c',
		    'ID0R' => 'id0r',
		    'ID5R' => 'id5r',
		    'IG0R' => 'ig0r',
		    'LSOF' => 'lsof',
		    'LSOF' => 'lsof',
		    'LSPV' => 'lspv',
		    'MSAc' => 'msac',
		    'MSAg' => 'msag',
		    'MSAm' => 'msam',
		    'MSLD' => 'msld',
		    'MSHA' => 'msha',
		    'MSSD' => 'mssd',
		    'MSSF' => 'mssf',
		    'MSSP' => 'mssp',
		    'MSTM' => 'mstm',
		    'MSTc' => 'mstc',
		    'MSTg' => 'mstg',
		    'NATJ' => 'natj',
		    'NATi' => 'nati',
		    'PD0R' => 'pd0r',
		    'PD5R' => 'pd5r',
		    'PDMR' => 'pdmr',
		    'PDTR' => 'pdtr',
		    'PG0R' => 'pg0r',
		    'SGHT' => 'sght',
		    'SGTT' => 'sgtt',
		    'SGTg' => 'sgtg',
		    'SHTg' => 'shtg',
		    'SCTg' => 'sctg',
		    'SLPT' => 'slpt',
		    'SLST' => 'slst',
		    'SLTg' => 'sltg',
		    'SLTp' => 'sltp',
		    'SOTg' => 'sotg',
		    'SPH0' => 'sph0',
		    'SpPT' => 'sppt',
		    'SpST' => 'spst',
		    'SpTg' => 'sptg',
		    'VC0C' => 'vc0c',
		    'VD0R' => 'vd0r',
		    'VD5R' => 'vd5r',
		    'VG0R' => 'vg0r',
		    'MO_X' => 'mo_x',
		    'MO_Y' => 'mo_y',
		    'MO_Z' => 'mo_z',
		    'VS2C' => 'vs2c',
		    'VN0C' => 'vn0c',
		    'VS1C' => 'vs1c',
		    'VS8C' => 'vs8c',
		    'Vp0C' => 'vp0c',
		    'IN0C' => 'in0c',
		    'Ip0C' => 'ip0c',
		    'PN0C' => 'pn0c',
		    'Pp0C' => 'pp0c',
		    'PpSM' => 'ppsm',
		    'IC0R' => 'ic0r',
		    'IG0C' => 'ig0c',
		    'IBAC' => 'ibac',
		    'PCPC' => 'pcpc',
		    'PCPG' => 'pcpg',
		    'PCPT' => 'pcpt',
		    'PBLC' => 'pblc',
		    'PC0R' => 'pc0r',
		    'PSTR' => 'pstr',
		    'IB0P' => 'ib0p',
		    'VP0R' => 'vp0r',
		    'PG0C' => 'pg0c',
		    'PB0R' => 'pb0r',
		    'VC2C' => 'vc2c',
		    'VC0G' => 'vc0g',
		    'VC1C' => 'vc1c',
		    'VCS0' => 'vcs0',
		    'VAPC' => 'vapc',
		    'VMAS' => 'vmas',
		    'VMBS' => 'vmbs',
		    'IH1Z' => 'ih1z',
		    'IH2Z' => 'ih2z',
		    'IH3Z' => 'ih3z',
		    'IH4Z' => 'ih4z',
		    'IMAS' => 'imas',
		    'IMBS' => 'imbs',
		    'Ie1S' => 'ie1s',
		    'Ie2S' => 'ie2s',
		    'Ie3S' => 'ie3s',
		    'Ie4S' => 'ie4s',
		    'IeAS' => 'ieas',
		    'IeBS' => 'iebs',
		    'PMAS' => 'pmas',
		    'PMBS' => 'pmbs',
		    'PH1Z' => 'ph1z',
		    'PH2Z' => 'ph2z',
		    'PH3Z' => 'ph3z',
		    'PH4Z' => 'ph4z',
		    'Pe1S' => 'pe1s',
		    'Pe2S' => 'pe2s',
		    'Pe3S' => 'pe3s',
		    'Pe4S' => 'pe4s',
		    'PeAS' => 'peas',
		    'PeBS' => 'pebs',
		    'PCAC' => 'pcac',
		    'PCBC' => 'pcbc',
		    'ICAC' => 'icac',
		    'ICBC' => 'icbc',
		    'VCAC' => 'vcac',
		    'VCBC' => 'vcbc',
		    'PTHC' => 'pthc',
		    'PM0C' => 'pm0c',
		    'PM1C' => 'pm1c',
		    'PO0R' => 'po0r',
		    'PD2R' => 'pd2r',
		    'Pp0R' => 'pp0r',
		    'PH05' => 'ph05',
		    'PH02' => 'ph02',
		    'PN1R' => 'pn1r',
		    'PM0R' => 'pm0r',
		    'PGTR' => 'pgtr',
		    'PC5R' => 'pc5r',
		    'PC1R' => 'pc1r',
		    'PCPL' => 'pcpl',
		    'PCTR' => 'pctr',
		    'PCPD' => 'pcpd',
		    'PC0C' => 'pc0c',
		    'PC1C' => 'pc1c',
		    'PC2C' => 'pc2c',
		    'PC3C' => 'pc3c',
		    'PC4C' => 'pc4c',
		    'PC5C' => 'pc5c',
		    'PC6C' => 'pc6c',
		    'PC7C' => 'pc7c',
		    'IPBR' => 'ipbr',
		    'IB0R' => 'ib0r',
		    'IO0R' => 'io0r',
		    'IM0R' => 'im0r',
		    'IM0C' => 'im0c',
		    'IC0M' => 'ic0m',
		    'IC0G' => 'ic0g',
		    'IC8R' => 'ic8r',
		    'IC5R' => 'ic5r',
		    'IC1C' => 'ic1c',
		    'Vb0R' => 'vb0r',
		    'VBAT' => 'vbat',
		    'VeES' => 'vees',
		    'VV8S' => 'vv8s',
		    'VV3S' => 'vv3s',
		    'VV7S' => 'vv7s',
		    'VD2R' => 'vd2r',
		    'VV9S' => 'vv9s',
		    'VH05' => 'vh05',
		    'VV1S' => 'vv1s',
		    'VR3R' => 'vr3r',
		    'VV2S' => 'vv2s',
		    'VN1R' => 'vn1r',
		    'VM0R' => 'vm0r',
		    'VG0C' => 'vg0c',
		    'VV1R' => 'vv1r',
		    'VC1C' => 'vc1c',
		    'VC2C' => 'vc2c',
		    'VC3C' => 'vc3c',
		    'VC4C' => 'vc4c',
		    'VC5C' => 'vc5c',
		    'VC6C' => 'vc6c',
		    'VC7C' => 'vc7c',
		    'dBA0' => 'dba0',
		    'dBA1' => 'dba1',
		    'dBA2' => 'dba2',
		    'dBAH' => 'dbah',
		    'dBAT' => 'dbat',
		    'SPHT' => 'spht',
		    'HDBS' => 'hdbs',
		    'IPBF' => 'ipbf',
		    'PHPC' => 'phpc',
		    'PPBR' => 'ppbr',
		    'VACC' => 'vacc',
		    'VCFR' => 'vcfr',
		    'ICS0' => 'ics0',
		    'ICS1' => 'ics1',
		    'IM3C' => 'im3c',
		    'IPB1' => 'ipb1',
		    'ISDC' => 'isdc',
		    'IO5R' => 'io5r',
		    'IO3R' => 'io3r',
		    'IC3C' => 'ic3c',
		    'ILCD' => 'ilcd',
		    'IBLC' => 'iblc',
		    'IAPC' => 'iapc',
		    'IHSC' => 'ihsc',
		    'ICMC' => 'icmc',
		    'ITPC' => 'itpc',
		    'VTPC' => 'vtpc',
		    'PTGR' => 'ptgr',
		    'PCPR' => 'pcpr',
		    'VC0M' => 'vc0m',
		    'VG1C' => 'vg1c',
		    'IG1C' => 'ig1c',
		    'VG0F' => 'vg0f',
		    'IG0F' => 'ig0f',
		    'IH05' => 'ih05',
		    'V1R1' => 'v1r1',
		    'IH02' => 'ih02',
		    'IH1R' => 'ih1r',
		    'ID2R' => 'id2r',
		    'I18C' => 'i18c',
		    'IB0L' => 'ib0l',
		    'IBLR' => 'iblr',
		    'IBTC' => 'ibtc',
		    'ISCC' => 'iscc',
		    'ICAM' => 'icam',
		    'ICEC' => 'icec',
		    'ICGC' => 'icgc',
		    'ICGM' => 'icgm',
		    'ICMC' => 'icmc',
		    'ICSC' => 'icsc',
		    'IF3C' => 'if3c',
		    'IF5C' => 'if5c',
		    'IHCC' => 'ihcc',
		    'IHNC' => 'ihnc',
		    'IIDC' => 'iidc',
		    'IKBC' => 'ikbc',
		    'IM1C' => 'im1c',
		    'IMCC' => 'imcc',
		    'IS1C' => 'is1c',
		    'IT3C' => 'it3c',
		    'ITAR' => 'itar',
		    'IULC' => 'iulc',
		    'IURC' => 'iurc',
		    'PCAM' => 'pcam',
		    'PCEC' => 'pcec',
		    'PCGC' => 'pcgc',
		    'PCGM' => 'pcgm',
		    'PCSC' => 'pcsc',
		    'PHCC' => 'phcc',
		    'PHNC' => 'phnc',
		    'PMCC' => 'pmcc',
		    'PO3R' => 'po3r',
		    'PO5R' => 'po5r',
		    'PS1C' => 'ps1c',
		    'PTAR' => 'ptar',
		    'VCGC' => 'vcgc',
		    'VCSC' => 'vcsc',
		    'VCSS' => 'vcss',
		    'PD0R' => 'pd0r'
		);
		
        // Process incoming fan_temps.plist
        $parser = new CFPropertyList();
        $parser->parse($data, CFPropertyList::FORMAT_XML);
        $plist = $parser->toArray();
		
        // Array of strings
        $strings =  array('discin','fanlabel0','fanlabel1','fanlabel2','fanlabel3','fanlabel4','fanlabel5','fanlabel6','fanlabel7','fanlabel8','lspv');
        
        // Array of target temps
        $targettemps =  array('sgtt','sctg','sgtg','shtg','sltg','sltp','sotg','sptg','slpt','slst','sppt','spst');
        
		// Traverse the xml with translations
		foreach ($translate as $search => $field) {  
                        
				// If key does not exist in $plist, null it
				if ( ! array_key_exists($search, $plist)) {
                    $this->$field = null;

                // Else if not a string, is not a target temp, is numeric, and starts with I, P, T, V, then save the field
				} else if (! in_array($field, $strings) && ! in_array($field, $targettemps) && is_numeric($plist[$search]) && (strpos($search, "I") !== 0) && (strpos($search, "P") !== 0) && (strpos($search, "T") !== 0) && (strpos($search, "V") !== 0) ) {  
                    $this->$field = $plist[$search];
                
                // Else if a string, save the value
                } else if (in_array($field, $strings)){
                    $this->$field = $plist[$search];
                    
                // Else if a target temp, is numeric, and greater than 30, save the value
                } else if (in_array($field, $targettemps) && is_numeric($plist[$search]) && floatval($plist[$search]) > 30 ){
                    $this->$field = $plist[$search];
                
                // Else if greater or equal to than 10, is numeric, and starts with T, then save the field
                } else if ( floatval($plist[$search]) >= 10 && is_numeric($plist[$search]) && (strpos($search, "T") === 0)) {  
                    $this->$field = $plist[$search];

                // Else if is greater than 0, is numeric, and starts with I, P, or V, then save the field
                } else if ( floatval($plist[$search]) > 0 && is_numeric($plist[$search]) && ((strpos($search, "I") === 0) || (strpos($search, "P") === 0) || (strpos($search, "V") === 0))) {  
                    $this->$field = $plist[$search];
                    
                // Else null the field
                } else {
                    $this->$field = null;
				}
		    }
    
		$this->save();
    }
}