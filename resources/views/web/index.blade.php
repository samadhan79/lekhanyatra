@extends('layouts.default')

@section('content')

<div class="about">
    <div class="container">
        <h2>Blogs</h2>    

        <div class="biography">
            <!-- <div class="biographys">
                <div class="col-md-4 biography-info">
                    <img src="{{asset('public/frontend/images/img11.jpg')}}" class="img-responsive" alt=""/>
                </div>
                <div class="col-md-8 biography-into">
                    <h4>Edie Campbell</h4>
                    <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below ook It has survived not only five centuries, a galley of type and reproduced scrambled  survived not only five  it to make a type specimen book for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                    <a href="details.html" class="link">Read More</a>
                </div>
                <div class="clearfix"> </div>
            </div> -->

            
        </div>

    </div>
</div>


<script type="text/javascript">


    $(document).ready(function(){
        show_blog();    
    });

    function show_blog(){
        $.ajax({
            url:'blog',
            type:'GET',
            dataType:'json',
            success:function(res){

                createData(res.data,res.path);

            }
        })
    }

    function createData(res,path){


        var path  ="{{asset('public/frontend/images/')}}";
        var url = "{{url('/details/')}}";
        

        if(res!=null){

            for(i in res){
                html ='</div class="biography">'

                +'<div class="biographys" >'
                +'<div class="col-md-4 biography-info">'+'<img src="'+path+'/'+res[i].blog_image+'" class="img-responsive" alt=""/>'
                +'</div>'

                +'<div class="col-md-8 biography-into">'
                +'<h1>'+res[i].blog_title+'</h1>'

                +'<p>'+res[i].blog_description+'</p>'

                +'<a href="'+url+'/'+res[i].blog_id+'" class="link">Read More</a>'

                +'</div>'
                +'<div class="clearfix">'+'</div>'
                +'</div>';

                +'</div>';
                $('.biography').append(html);   

            }


        }
    }
</script>

@stop