<?php /* Smarty version Smarty-3.1.15, created on 2015-09-26 15:48:28
         compiled from "E:\www\src2\trunk\BPO\WhiteShirt\templates\admin\picture\management.html" */ ?>
<?php /*%%SmartyHeaderCode:74756064ac1d1c184-45464365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69a53ff52ce45dad601c5981c73fb64b7b324aa2' => 
    array (
      0 => 'E:\\www\\src2\\trunk\\BPO\\WhiteShirt\\templates\\admin\\picture\\management.html',
      1 => 1443253696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74756064ac1d1c184-45464365',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56064ac1d63251_98892801',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56064ac1d63251_98892801')) {function content_56064ac1d63251_98892801($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../public/left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="content">
    <div id="contentDiv">
        <div id="PerCentDiv">
            <div class="content-mid">
                <div class="content-mid-list">
                    <table id='picture_list'  cellpadding="0" cellspacing="0"  width="100%" class="table-mid" toolbar="#tb">
                    </table>
                </div>
            </div>
        </div>
    </div>
</div><!--content end-->
<script type="text/javascript">
    
    $(function(){
        $("#contentDiv").css("width",$("#content").width())
        datagridheight('#picture_list');
        loadData();
    });
    function deleteone(rowid){
      if(confirm("确定要删除吗?")){
    	var ids=[];
    	ids.push(rowid);
   	   $.ajax({
         type: "POST",
         url:  "deletePicture.php",
         data: {"ids[]":ids},
         dataType: 'json',
         success: function (msg) {
            if(msg){
            	alert("删除成功");
            	 $('#picture_list').datagrid("reload");
            }else{
            	alert("删除失败");
            }
          }
      });
     }
    }
      
    function loadData(greetingsText){
        $('#picture_list').datagrid({
            url:'getPictureList.php',
            method:"get",
            nowrap: false,
            title:"照片列表",
            pageList:[10,20,30,40,50],
            pagination:true,//分页控件
            rownumbers:true,//显示行号
            singleSelect:false,
            pageSize:10,
            pageNumber:1,
            columns:[[
                {field:'username',title:'姓名',align:'center',width:200},
                {field:'phone',title:'手机',align:'center',width:160},
                {field:'addtime',align:'center',title:'上传时间',width:200},
                {field:'pictureurl',align:'center',title:'图片',width:80,formatter:function(value,rowData){
					if(rowData.pictureurl == ""){
						return ''; 	
					}
                    return "<div><a target='_blank' href="+rowData.pictureurl+"><img  style='padding:6px' width='60px' height='60px' src="+rowData.pictureurl+" onerror='errorfun(this)'></a></div>";
                }},
                {field:'nickname',align:'center',title:'微信昵称',width:200},
                {field:'weixinheadurl',align:'center',title:'微信头像',width:80,formatter:function(value,rowData){
                    if(!isNull(rowData.nickname))
                    {
                        return "<div><img  style='padding:6px' width='60px' height='60px' src="+rowData.weixinheadurl+"></div>";
                    }
                    return "";
                }},
                {field:'opration',align:'center',title:'操作',width:100,formatter:function(value,rowData,rowIndex){
                    var opration = '<div class="table-mid-cell">';
                    opration +='<a href="javascript:void(0)" onclick="deleteone('+rowData.id+')">删除</a>';
                    opration +='</div>';
                    return opration;
                }}
            ]],
            onLoadSuccess:function(data){
                $('#picture_list').datagrid('unselectRow');
            }
        });
    }
   
function errorfun(o){
	$(o).attr("src",'error.jpg')	
}
 
</script>
<?php echo $_smarty_tpl->getSubTemplate ("../public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
