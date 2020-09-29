{{--<script src="{{URL::asset('/js/script.js')}}"></script>--}}

<div id = "myModal" class="modal" >

    <form id="addArticleModalId" method="POST" action="/add/article" enctype="multipart/form-data">
            {{csrf_field()}}
        <div class="modal-content">
            <span class="close" style="position: absolute; top: 0; right: 0; margin: 8px;">&times;</span>
            <p><h3>Write something new!</h3></p>
            <input id="title" name="tittle" placeholder="Title" style="border: none;font-size: 20px;border-bottom: 0.5px gray solid;width: 50%;margin-left: auto;margin-right: auto; text-align: center;padding: 5px">
            <div id="titleErrors"></div>
            <input id="author" name="author" placeholder="Author" style="margin-top: 20px;border: none;border-bottom: 0.5px gray solid;width: 50%;margin-left: auto;margin-right: auto; text-align: center; padding: 5px">
            <div id="authorErrors"></div>
            <input id="priceBook" name="priceBook" placeholder="Price" style="margin-top: 20px;border: none;border-bottom: 0.5px gray solid;width: 50%;margin-left: auto;margin-right: auto; text-align: center; padding: 5px">
            <div id="priceErrors"></div>
            <textarea id="newArticleTxt" name="text" placeholder="New article is beginning..." style="margin-top: 20px;font-size: 18px; padding-bottom: 150px;font-family: 'Bookman Old Style'; font-weight: bolder; border: none; border-bottom: 0.5px gray solid;width: 95%;margin-left: auto;margin-right: auto; text-align: left; ; "></textarea>
            <div id="txtErrors"></div>
            <input id="nf" type="file" multiple name="image" style="margin-top: 10px">
            <input onclick="ValidateBook()"  class="subbut" type="button" value="Save" name="submit1" /><br />
        </div>

    </form>

</div>

<script src="{{URL::asset('/js/script.js')}}"></script>
