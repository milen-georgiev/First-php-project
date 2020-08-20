$(function(){
		$('li a').filter(function(){
			if(this.href==location.href){
				return this.href==location.href;

			}
			else
			{
				if(location.href.indexOf('.php') == -1 ) {
					$('li').first().addClass('active');
				}

			}
        }).parent().addClass('active').siblings().removeClass('active');
		$('li a').click(function(){
			$(this).parent().addClass('active').siblings().removeClass('active');	
		});
	})