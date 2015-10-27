/**
 * 图片审核
 * @param type 1 通过 2 不通过  3 删除
 * @param pictureId
 */
function operation(type, id) {
    var msg = "";
    if (type == 1) {
        msg = "您确认要将该照片审核通过吗？";
    } else if (type == 2) {
        msg = "您确认要将该照片审核不通过吗？";
    } else {
        msg = "您确认要将该照片删除吗？";
    }
    $.messager.confirm('确认', msg, function (r) {
        if (r) {
            operationAction(id, type);
        }
    })
}
/**
 * 批量审核
* @param type 1 通过 2 不通过  3 删除
 */
function dooperation(type) {
    var rows = $('#picture_list').datagrid('getChecked');
    if (rows.length == 0) {
        $.messager.alert('提示', "至少选择一张图片");
        return;
    }
    var id = "";
    for (var i = 0; i < rows.length; i++) {
        id += rows[i].id + ",";
    }
    if (id.length > 0) {
        id = id.substring(0, id.length - 1);
    }
    if (type == 1) {
        msg = "您确认要将这些照片审核通过吗？";
    } else if (type == 2) {
        msg = "您确认要将这些照片审核不通过吗？";
    } else {
        msg = "您确认要将这些照片删除吗？";
    }
    $.messager.confirm('确认', msg, function (r) {
        if (r) {
            operationAction(id, type);
        }
    })
}
/**
 * 审核操作
 */
function operationAction(id, type) {
    $.ajax({
        type: "POST",
        url: '../../request/admin/operationAction.php',
        data: "id=" + id + "&type=" + type,
        dataType: "json",
        success: function (msg) {
            if (msg.rsp == true) {
                var msg = "";
                if (type == 1) {
                    msg = "照片审核通过操作成功";
                } else if (type == 2) {
                    msg = "照片审核不通过操作成功";
                }
                else {
                    msg = "照片删除操作成功";
                }
                $.messager.alert('提示', msg);
                $('#picture_list').datagrid('reload');
            } else {
                $.messager.alert('提示', "操作失败");
            }
        }
    });
}
/**
 * 搜索图片
 */
function doSearch() {
    $('#picture_list').datagrid({
        url: '../../request/admin/getPictureList.php',
        method: "get",
        queryParams: {
            eventName: $('#eventName').combo('getValue'),
            uploadSites: $('#uploadSites').combotree('getValue'),
            isReview: $('#isReview').combo('getValue')
        },
        title: "用户上传图片列表",
        pageNumber: 1,
        pageList: [20, 30, 40, 50],
        pagination: true,//分页控件
        rownumbers: true,//显示行号
        singleSelect: false,
        height: 500
    });
}
