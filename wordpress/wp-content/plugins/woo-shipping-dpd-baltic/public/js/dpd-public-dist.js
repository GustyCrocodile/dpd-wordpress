!function(n,e,t){"use strict";function c(e){let c={action:"set_checkout_session",cod:e},i=null;"undefined"!=typeof wc_checkout_params?i=wc_checkout_params:"undefined"!=typeof wc_cart_params&&(i=wc_cart_params),null!==i&&n.post(i.ajax_url,c,function(){setTimeout(function(){n(t.body).trigger("update_checkout")},300)})}n(function(){!function(){let e=n("#wc_shipping_dpd_parcels_terminal"),i=0;i=e.find(":selected").data("cod"),n(t).on("change","#wc_shipping_dpd_parcels_terminal",function(){let e=n(this);c(i=e.find(":selected").data("cod"))})}(),n(t.body).on("click",'input[name="shipping_method[0]"]',function(){c(1)}),n(t.body).on("change","[name='wc_shipping_dpd_home_delivery_shifts']",function(){n(t.body).trigger("update_checkout")})})}(window.jQuery,window,document);