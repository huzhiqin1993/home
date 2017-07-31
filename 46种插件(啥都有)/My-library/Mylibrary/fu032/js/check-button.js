var CusButton = (function(){
	var _bind = function(that, config){
		that.btnObj.each(function(i){
			var btn = that.btnObj.eq(i);
			//btn.wrapAll('<p class="'+config+'_value"></p>');
			btn.append('<span class="'+config+'_value">'+btn.attr('value')+'</span>')
			.on('click',function(){
			//btn.children().append(btn.attr('value')).on('click',function(){
				that.render(btn, config);
			});
		});
	};
	var _click_callback = function(that){

	};

	var btnFn = function(config){
	};

	btnFn.prototype.init = function(config){
		this.btnObj = $('.'+config);
		_bind(this, config);
	};

	btnFn.prototype.render = function(btnTgd, config){
		if(config == 'radio'){
			btnTgd.parent().find('.radio').removeClass('checked');
		}
		btnTgd.toggleClass('checked');

		if(btnTgd.attr('id')){
			$('html').removeAttr('class');
			$('html').addClass(btnTgd.attr('id'));
		}

		_click_callback(this);
	};

	return btnFn;

})();

$(function(){
	new CusButton().init('radio');
	new CusButton().init('checkbox');

	// $('.theme').on('click', function(){
	// 	document.className = $(this).id;
	// });

});