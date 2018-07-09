
$('.accordion-toggle').click(function()
{
	// $('.accordion-content').slideUp('slow')
	$(this).next().slideToggle('slow')
})
$('.product').click(function(){
	var action = $(this).attr('data-name')
	if (action=='create') {
	// alert(action)
		var html = '	<div id="cont" style="width: 100%; "><div class="center"><form class="ch1" id="frm" class="col-md-5" method="post" enctype="multipart/form-data"><input type="hidden" id="action" name="" value="<?= base_url() ?>"><input placeholder="title..." class="form-control" type="" name="title"><input placeholder="price..." class="form-control" type="" name="price"><textarea placeholder="description ..." class="form-control" name="descr"></textarea><input class="form-control" type="file" name="photo"><button type="button" id="send" class="btn btn-outline-info">add product</button></form><form class="m-8 ch2" method="post" action="<?= base_url(products/all) ?>"><button class="m-5 btn btn-outline-info" id="allproducts">all products</button></form></div></div>'
		$('.content').append(html)
	}
})