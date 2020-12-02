
var BLT={'Class':{},'Load':[],'Unload':[],'Store':{},'Obj':false,'Env':{'yuiconfig':{'combine':false,'filter':'min','force':false,'modules':{}},'yuiprereq':['base','node','anim','event','io','json','imageloader','selector-css3',"get","overlay","node-event-simulate",'async-queue']}};BLT.add=function(q,o,id){var qs={'l':'Load','u':'Unload','s':'Store'};var h=BLT[qs[q]];if(typeof o=='object'){if(!id){id='_d';}
if(typeof h[id]=='undefined'){h[id]={};}
for(var e in o){h[id][e]=o[e];}}
else{h.push(o);}};BLT.get=function(id,k){if(!BLT.Store[id]){return false;}
else if(!k){return BLT.Store[id];}
else if(BLT.Store[id][k]){return BLT.Store[id][k];}
else{return false;}}
BLT.execute=function(q){var qs={'l':'Load','u':'Unload'};var h=BLT[qs[q]];for(var e in h){h[e].call();delete(h[e]);}}
BLT.regModules=function(modules){for(var m in modules){BLT.Env.yuiconfig.modules[m]={"fullpath":modules[m].file,"requires":[]};BLT.Env.yuiprereq.push(m);}}