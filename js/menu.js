//anonymous scope to keep global space clean
(function(root){
	//thanks to http://youmightnotneedjquery.com/
	var ready = function(fn) {
			if (document.readyState != 'loading'){
				fn();
			} else {
				document.addEventListener('DOMContentLoaded', fn);
			}
		},

		//simple throttle to space out event responses
		throttle = function(fn, delay, scope){
			var timer = 0;
			return function(){
				var context = scope || this,
					args = arguments;

				if(timer !== 0) return;

				timer = setTimeout(function(){
					fn.apply(context, args);
					clearTimeout(timer);
					timer = 0;
				}, delay);

				//will run it once on a dead call
				fn.apply(context, args);
			};
		},

		addClass = function(el, cl){
			var cname = el.className,
				re = new RegExp(cl);

			if(!cname.match(re)){
				cname += " " + cl;
				el.className = cname;
			}
		},

		removeClass = function(el, cl){
			var cname = el.className,
				re = new RegExp(cl);

			if(cname.match(re)){
				cname = cname.replace(re, "");
				el.className = cname;
			}
		};

	ready(function(){

		var menuManager = function(){
			var self = this;
			
			this.refs = {};
			this.isActive = false;

			this.activeMenuClass = "is-active-menu";
			this.activeMenuButtonClass = "is-active-menuButton";

			this.__construct = function(){
				this.discover();
				this.listen();
			}

			//grab the menu button and the mobile menu
			this.discover = function(){
				var button = document.getElementsByClassName("menuButton")[0],
					menu = document.getElementById("mobileMenuContainer");

				this.refs.button = button;
				this.refs.menu = menu;
			};

			this.listen = function(){
				this.refs.button.addEventListener("click", this.handleClick);
				window.addEventListener("resize", throttle(self.hideMenu, 500, self));
			};

			this.handleClick = function(e){
				if(self.isActive){
					self.hideMenu();
				}
				else{
					self.showMenu();
				}
			};

			this.hideMenu = function(){
				if(!this.isActive) return;

				removeClass(this.refs.button, this.activeMenuButtonClass);
				removeClass(this.refs.menu, this.activeMenuClass);
				removeClass(document.body, "is-locked");

				this.isActive = false;
			};

			this.showMenu = function(){
				if(this.isActive) return;

				addClass(this.refs.button, this.activeMenuButtonClass);
				addClass(this.refs.menu, this.activeMenuClass);
				addClass(document.body, "is-locked");

				this.isActive = true;
			};

			this.__construct();
		};

		new menuManager();

	});

})(this);