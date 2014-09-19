var Helper = {

    init:function(){
        if(window.jQuery === undefined) {
            throw "Jquery is required. Please install it!";
        }
        return this;
    },

    hideBlock:function(selector,duration) {
        if($(selector).length > 0) {
            setTimeout(function(){
                $(selector).fadeOut('1000',function(){
                   $(this).remove();
                });
            },duration);
        }
    }
};