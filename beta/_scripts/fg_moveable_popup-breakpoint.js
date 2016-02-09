// load popup based on window size
if (document.documentElement.clientWidth < 600) { 
document.write('<scr'+'ipt type="text/javascript" src="_scripts/fg_moveable_popup-sm.js?<?php echo time(); ?>"></scr'+'ipt>');
} else { 
document.write('<scr'+'ipt type="text/javascript" src="_scripts/fg_moveable_popup.js?<?php echo time(); ?>"></scr'+'ipt>');
}