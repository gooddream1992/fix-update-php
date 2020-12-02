
YUI.add("bolt-panel",function(Y){var $=Y.get,$j=Y.JSON;BLT.Panel=function(args){this.init(args);}
BLT.Panel.prototype={args:{},ignoreDo:false,init:function(args){this.args=args;this.obj=new Y.Overlay({"centered":true,"bodyContent":"","zIndex":100});if(args&&args.type!='simple'){this.obj.get('boundingBox').append("<div class='back'></div><a class='close-panel'>close</a>");this.obj.get('boundingBox').addClass("panel");this.obj.get('contentBox').append("<div class='loading_mask'></div><div class='loading_ind'></div>");}
if(args&&args['class']){for(var c in args['class']){this.obj.get('boundingBox').addClass(args['class'][c]);}}
this.obj.render("#doc");this.obj.hide();this.obj.get('boundingBox').on('click',this.click,this);this.publish('panel:click');this.publish('panel:open');this.publish('panel:close');this.publish('panel:submit');this.publish('panel:beforeload');this.publish('panel:afterload');this.obj.after('xyChange',function(e){var xy=e.newVal;if(xy[1]<10){this.obj.move([xy[0],20]);}},this);Y.on('scroll',function(){this.obj.centered();},document,this);},click:function(e){var tar=e.target;this.fire('panel:click',{'target':tar,'event':e});if(tar.hasClass('close-panel')){this.close();}},open:function(){if(this.args.modal){if(!Y.get('#panel-modal')){Y.get("body").insert("<div id='panel-modal' style='display:none'></div>");}
$("#panel-modal").setStyles({'opacity':0,'display':'block','height':Y.one(window).get('docHeight')+'px'});var a=new Y.Anim({node:$('#panel-modal'),from:{'opacity':0},to:{'opacity':.6},"duration":.5});a.run();}
this.fire('panel:open');this.obj.show();},close:function(args){this.fire('panel:close',args);if(this.args.modal){var a=new Y.Anim({node:$('#panel-modal'),to:{'opacity':0},"duration":.2});a.on("end",function(){$("#panel-modal").setStyles({'opacity':0,'display':'none'});});a.run();}
BLT.execute('u');this.obj.hide();},submit:function(e){var tar=e.target;if(tar.hasClass('loading')){return;}
tar.addClass('loading');var url=tar.getAttribute('x-action');this.fire('panel:submit');this.load(url,{'form':tar});},load:function(url,args){this.obj.get('boundingBox').addClass('loading');this.fire('panel:beforeload');var url=BLT.Obj.getUrl(url,{'.context':'xhr'});var reg_url=url;var params={'method':'GET','context':this,'arguments':args,'timeout':10000,'on':{'failure':function(){},'complete':function(id,o,a){var json=false;try{json=$j.parse(o.responseText);}
catch(e){}
if(!json||json.stat!=1){}
this.obj.get('boundingBox').removeClass('loading');this.fire('panel:xhrcomplete',json);if(json['do']&&this.ignoreDo!==true){if(json['do']=='redi'){this.close();window.location.href=json.url;return;}
else if(json['do']=='error'){Y.one(args.form).removeClass('loading');return;}
else if(json['do']=='login'){BLT.Obj.login(json.args);return;}
else if(json['do']=='load'){this.load(json.url+'&.context=xhr',{'openAfter':true});return;}
else if(json['do']=='close'){this.close(json.args);return;}
else if(json['do']=='refresh'){window.location.href=window.location.href;}}
this.obj.set('bodyContent',json.html);if(json.bootstrap){this.obj.set('headerContent',json.bootstrap.t);this.obj.get('bodyContent').addClass(json.bootstrap.c);if(json.bootstrap.js){for(var el in json.bootstrap.js){eval(json.bootstrap.js[el]);}}}
this.obj.get('boundingBox').all('form').each(function(el){if(!el.hasClass('direct')){var action=el.getAttribute('action');el.setAttribute('x-action',action);el.setAttribute('action','#');el.setAttribute('method','get');el.on('submit',function(e){e.halt();this.submit(e);},this);}},this);this.obj.centered();this.fire('panel:afterload');BLT.execute('l');if(a&&a.openAfter){this.open();}}}};if(args&&args.form){params['form']={'id':args.form};params['method']='POST';}
Y.io(url,params);}}
Y.augment(BLT.Panel,Y.EventTarget);});