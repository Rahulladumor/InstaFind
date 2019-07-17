   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script>
         $(function(){
            $.ajax({
               type: 'ajax',
               url: '<?php echo site_url('admin/manage_admin/get_data'); ?>',
               success: function(data){
                  alert('kk');
                  var ob=JSON.parse(data);
                  var str = '';
                  console.log(ob);
                  $.each(ob,function(key,value){
                     str += '<tr align="center"><td>' + value.id + '</td>';
                     str += '<td>' + value.name + '</td>';
                     str += '<td>' + value.email + '</td>';
                     str += '<td>' + value.password + '</td>';
                     str += '<td>'+
                        '<button class="btn btn-xs btn-info"><i class="ace-icon fa fa-check bigger-120"></i></button>'+
                        '<button class="btn btn-xs btn-info"><i class="ace-icon fa fa-pencil bigger-120"></i></button>'+
                        '<button class="btn btn-xs btn-info"><i class="ace-icon fa fa-trash-o bigger-120"></i></button>'+
                        '<button class="btn btn-xs btn-info"><i class="ace-icon fa fa-flag bigger-120"></i></button>'+ '</td></tr>';
                  });

                  $('#showdata').html(str);
               },
               error: function(){
                  alert("no data found")
               }
            });
         });
      </script>