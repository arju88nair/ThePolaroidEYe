$(function(){






    var clickHandler = function (e) {
        var spread = $(this).val();
        var seHue  = $('#hueRange').val();
        $('.il').remove();
        $.ajax({
            type: "POST",
            url: "db",
            data: {'spread': spread, 'hue': seHue},
            async: true,
            dataType: 'json',
            enctype: 'multipart/form-data',
            cache: false,
            success: function (data) {
                console.log(data);
                if (data.length > 0) {
                    $('#count').text("There are  " + data.length + " image(s) for hue of " +seHue+ " and spread of " + spread);
                    for (var i = 0; i < data.length; i++) {
                        var url = data[i].url;
                        var ip = data[i].IPaddress;
                        var hue = data[i].hue;
                        var date = data[i].created_at;
                        $('#ul').append(' <li class="il" id="il"> <div class="imageDiv"><img  class="imgTag" src=' + url + '></div> <span id="spanTag">Hue  - &nbsp;&nbsp;</span><span id="hueVal">' + hue + '</span><br> <p id="Ips">Ip of the user &nbsp;&nbsp; ' + ip + '</p><br><center><span id="dated">Added on&nbsp;&nbsp;' + date + '</span></center></li>');
                    }

                    $('html, body').animate({
                        scrollTop: $("#il").offset().top
                    }, 1000);
                }
                else{
                    $('#count').text("No images for the selected Hue and Spread!");
                }
            },
            error: function () {
                $('#count').text("Something went wrong.Please try again");
            }
        });
        e.stopImmediatePropagation();
    }

    $('#spread').on('change', clickHandler);

















    var ul = $('#upload ul');

    $('#drop a').click(function(){
        // Simulate a click on the file input button
        // to show the file browser dialog
        $(this).parent().find('input').click();
    });

    // Initialize the jQuery File Upload plugin
    $('#upload').fileupload({

        // This element will accept file drag/drop uploading
        dropZone: $('#drop'),

        // This function is called when a file is added to the queue;
        // either via the browse button, or via drag/drop:
        add: function (e, data) {

            var tpl = $('<li class="working"><input type="text" value="0" data-width="48" data-height="48"'+
                ' data-fgColor="#0788a5" data-readOnly="1" data-bgColor="#3e4043" /><p></p><span></span></li>');

            // Append the file name and file size
            tpl.find('p').text(data.files[0].name)
                         .append('<i>' + formatFileSize(data.files[0].size) + '</i>');

            // Add the HTML to the UL element
            data.context = tpl.appendTo(ul);

            // Initialize the knob plugin
            tpl.find('input').knob();

            // Listen for clicks on the cancel icon
            tpl.find('span').click(function(){

                if(tpl.hasClass('working')){
                    jqXHR.abort();
                }

                tpl.fadeOut(function(){
                    tpl.remove();
                });

            });

            // Automatically upload the file once it is added to the queue
            var jqXHR = data.submit();
        },

        progress: function(e, data){

            // Calculate the completion percentage of the upload
            var progress = parseInt(data.loaded / data.total * 100, 10);

            // Update the hidden input field and trigger a change
            // so that the jQuery knob plugin knows to update the dial
            data.context.find('input').val(progress).change();

            if(progress == 100){
                data.context.removeClass('working');
            }
        },

        fail:function(e, data){
            // Something has gone wrong!
            data.context.addClass('error');
        }

    });


    // Prevent the default action when a file is dropped on the window
    $(document).on('drop dragover', function (e) {
        e.preventDefault();
    });

    // Helper function that formats the file sizes
    function formatFileSize(bytes) {
        if (typeof bytes !== 'number') {
            return '';
        }

        if (bytes >= 1000000000) {
            return (bytes / 1000000000).toFixed(2) + ' GB';
        }

        if (bytes >= 1000000) {
            return (bytes / 1000000).toFixed(2) + ' MB';
        }

        return (bytes / 1000).toFixed(2) + ' KB';
    }

});