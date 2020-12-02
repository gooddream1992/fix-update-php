
YUI.add("bolt-comments",function(Y){var $=Y.get,$j=Y.JSON;BLT.Comments=function(args){this.init(args);}
BLT.Comments.prototype={args:{},init:function(args){this.args=args;if(!$('#comments-'+this.args.id)){return;}
$('#comments-'+this.args.id).on('click',this.click,this);},click:function(e){var tar=e.target;this.fire('comments:click',{'target':tar,'event':e});if(tar.hasClass('writebox')){this.setupCommentBox(tar);}},setupCommentBox:function(tar){if(tar.hasClass('unselected')){tar.removeClass('unselected');tar.addClass('selected');tar.on('blur',this.restoreCommentBox,this);}},restoreCommentBox:function(e){var tar=e.target;if(tar.get('value')==''){tar.removeClass('selected');tar.addClass('unselected');}}}
Y.augment(BLT.Comments,Y.EventTarget);});