define([],function(){var e=Backbone.View.extend({className:"upfront-inline-panel upfront-no-select",position_v:"top",position_h:"center",initialize:function(){this.items=_([])},render:function(){var e=typeof this.items=="function"?this.items():this.items,t=["upfront-inline-panel-"+this.position_v,"upfront-inline-panel-"+this.position_v+"-"+this.position_h],n=0,r=0;this.$el.html(""),this.collapsedParent=!1,e.each(function(e){e.panel_view=this,e.render(),e.delegateEvents(),this.$el.append(e.el),e.collapsed&&(t.push("upfront-inline-panel-collapsed-parent"),this.collapsedParent=!0),this.position_v==="center"?(n=e.width>n?e.width:n,r+=e.height):(n+=e.width,r=e.height>r?e.height:r),typeof e.active=="function"&&e.active()==1?e.$el.addClass("active"):typeof e.active=="function"&&e.active()==0&&e.$el.removeClass("active")},this),this.$el.addClass(this.className+" "+t.join(" ")),this.collapsedParent&&(r=13),this.$el.css({width:n,height:r})},remove:function(){var e=typeof this.items=="function"?this.items():this.items;e&&e.each(function(e){e.remove()}),Backbone.View.prototype.remove.call(this)}});return e});