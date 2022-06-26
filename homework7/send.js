$(".createtable").click(function () {
    let nametable =  $("input[name=nametable]").val();
    let s = {
        nametable:nametable
    }
    var  send = true;
    $("input[name=nametable]").each(function(){
        if(!$(this).val() || $(this).val() == ''){

            send = false;
        }
    });
    if(!send) return false;

    $.ajax({
        url: 'createtable.php',
        type: 'POST',
        data: s,

        beforeSend: function() {
        },
        success: function(data) {
            $(".createtable").replaceWith("<div>"+data+"</div>");
            $(".show_before_createtable").css("display","flex");
        }
    });
    $.ajax({
        url: 'getid.php',
        type: 'POST',
        data: s,

        beforeSend: function() {
        },
        success: function(data) {
            console.log(data);
            let jsonObject =  $.parseJSON(data);
            $.each(jsonObject, function(i,obj){
                let id = obj.id;

                let oldHtml = $(".alluser").html();
                $(".alluser").html (oldHtml  +"<label>"+id+"<input type='checkbox' class='check' name='delete[]' value='"+id+"'></label>");

            });

        }
    });
    $.ajax({
        url: 'getid.php',
        type: 'POST',
        data: s,

        beforeSend: function() {
        },
        success: function(data) {
            console.log(data);
            let jsonObject =  $.parseJSON(data);
            $.each(jsonObject, function(i,obj){
                let id = obj.id;
                console.log(id);
                let oldHtml = $(".alluser").html();
                $(".alluser").html (oldHtml  +id);
            });

        }
    });
});

$(".adduser").click(function () {

    let nametable =  $("input[name=nametable]").val();
    let name =  $("input[name=name]").val();
    let surname = $("input[name=surname]").val();
    let age = $("input[name=age]").val();
    let email = $("input[name=email]").val();
    let s = {
        nametable:nametable,
        name:name,
        surname:surname,
        age:age,
        email:email
    }
    var  send = true;
    $("input[name=name]").each(function(){
        if(!$(this).val() || $(this).val() == ''){

            send = false;
        }
    });
    $("input[name=surname]").each(function(){
        if(!$(this).val() || $(this).val() == ''){

            send = false;
        }
    });
    $("input[name=age]").each(function(){
        if(!$(this).val() || $(this).val() == ''){

            send = false;
        }
    });
    $("input[name=email]").each(function(){
        if(!$(this).val() || $(this).val() == ''){

            send = false;
        }
    });
    if(!send) return false;

    $.ajax({
        url: 'adduser.php',
        type: 'POST',
        data: s,

        beforeSend: function() {
        },
        success: function(data) {
            $(".adduser_log").text(data);

        }
    });
});


$(".getid_user").click(function () {
    let nametable =  $("input[name=nametable]").val();
    let s ={
        nametable:nametable
    }
    $.ajax({
        url: 'getid.php',
        type: 'POST',
        data: s,

        beforeSend: function() {
        },
        success: function(data) {
            let jsonObject =  $.parseJSON(data);
            $.each(jsonObject, function(i,obj){
                let id = obj.id;
                let oldHtml = $(".idlist").html();
                $(".idlist").html (oldHtml + "<button class='id_user'>" + id + "</button>");
            });
            let oldHtml = $(".idlist").html();
            $(".idlist").html (oldHtml + "<div class='help'>Нажмите на айди</div>");
        }
    });

});
$(function() {
    $(document).on('click touchstart', '.id_user', function(){
        let id = $(this).text();
        let nametable =  $("input[name=nametable]").val();
        let s ={
            nametable:nametable,
            id:id
        }
        $.ajax({
            url: 'getuser.php',
            type: 'POST',
            data: s,

            beforeSend: function() {
            },
            success: function(data) {
                let jsonObject =  $.parseJSON(data);
                $(".idlist_log").html ("<div class='row'><div class='col-3'>" + jsonObject.name + "</div><div class='col-3'>" + jsonObject.surname + "</div><div class='col-3'>" + jsonObject.age + "</div><div class='col-3'>" + jsonObject.email + "</div></div>");
            }
        });
    });
});

$(".delete_user").click(function () {
    let nametable =  $("input[name=nametable]").val();
    var isChecked = $('input:checkbox:checked').map(function() {
            return this.value;
        }).toArray();
    let s = {
        nametable:nametable

    }

    $.ajax({
        url: 'deleteuser.php',
        type: 'POST',
        data: (s, isChecked)
    });
});

