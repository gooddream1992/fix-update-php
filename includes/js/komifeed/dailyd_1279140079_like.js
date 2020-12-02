
YUI.add("bolt-like",function(Y){var $=Y.get,$j=Y.JSON,$b;BLT.Like=function(args){this.init(args);}
BLT.Like.prototype={args:{},init:function(args){$b=BLT.Obj;this.args=args;$("#doc").on('click',this.click,this);this.publish('link:click');if(typeof BLT.Store.Likes=='undefined'){BLT.Store.Likes={};}
BLT.Store.Likes[args.uid]=this;this.el=$('#'+this.args.uid);this.count=parseInt(this.args.count,10);this.el.all('a').each(function(el){el.addClass('g:ignore');});},click:function(e){var tar=oTar=e.target;if((tar=$b.getParent(oTar,'like'))&&tar.get('id')==this.args.uid){e.halt();if(BLT.Env.session.logged===false){this.login();}
else{this.like();this.fire('like:click',{'target':tar,'event':e});}}},like:function(){if(this.el.hasClass('liked')||this.el.hasClass('loading')){return;}
var url=$b.getAjaxUrl('likebutton');var qp=[];for(var p in this.args){qp.push(p+"="+encodeURIComponent(this.args[p]));}
this.el.addClass('loading');var params={'method':'POST','context':this,'data':qp.join('&'),'timeout':10000,'on':{'failure':function(){},'complete':function(id,o,a){var j=$j.parse(o.responseText);if(j.stat<1){if(j['do']=='login'){this.login();}
return;}
try{_g.action("like",{});}catch(e){}
this.el.removeClass('loading');this.el.addClass('liked');this.increment(true);}}};Y.io(url,params);},login:function(){var r=encodeURIComponent(BLT.Env.Urls.self+"#perform:click:"+this.args.uid);window.location.href=$b.getUrl(BLT.Env.Urls.login,{'.return':r,'.token':BLT.Env.me['xhr-token']});},increment:function(user,count){if(count){if(count<=this.count){return;}
this.count=count;}
else{this.count+=1;}
if(isNaN(this.count)){this.count=1;}
this.el.addClass('lock');var em=this.el.one('em');var n=em.cloneNode(true);em.insert(n.set('innerHTML',this.count),'after');em.setStyles({'position':'absolute','top':0,'left':0});em.addClass('moving');var a=new Y.Anim({'node':em,'to':{'top':parseInt(em.getStyle('height'),10)*-1,'opacity':0,'color':'#fff'},'from':{'color':'#FC4300'},'duration':.8});var self=this;a.on('end',function(){a.get('node').remove();self.el.removeClass('lock');});a.run();if(user){}}}
Y.augment(BLT.Like,Y.EventTarget);});