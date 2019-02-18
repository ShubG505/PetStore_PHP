<div class="col-12 col-sm-3">
  <div class="card bg-light mb-3">
    <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i> Categories</div>
    <ul class="list-group category_block">
      <li class='list-group-item {% if category == "dog" %} active {% endif %}'><a href="/category/dog">Dogs</a> <span class="pull-right"><a href="/category/dog/asc" class='{% if order == "asc" %} active {% endif %}'><i class="fa fa-arrow-up"></i></a> <a href="/category/dog/desc" class='{% if order == "desc" %} active {% endif %}'><i class="fa fa-arrow-down"></i></a></span></li>
      <li class='list-group-item {% if category == "cat" %} active {% endif %}'><a href="/category/cat">Cats</a> <span class="pull-right"><a href="/category/cat/asc" class='{% if order == "asc" %} active {% endif %}'><i class="fa fa-arrow-up"></i></a> <a href="/category/cat/desc" class='{% if order == "desc" %} active {% endif %}'><i class="fa fa-arrow-down"></i></a></span></li>
      <li class='list-group-item {% if category == "reptile" %} active {% endif %}'><a href="/category/reptile">Reptiles</a> <span class="pull-right"><a href="/category/reptile/asc" class='{% if order == "asc" %} active {% endif %}'><i class="fa fa-arrow-up"></i></a> <a href="/category/reptile/desc" class='{% if order == "desc" %} active {% endif %}'><i class="fa fa-arrow-down"></i></a></span></li>
      <li class='list-group-item {% if category == "toy" %} active {% endif %}'><a href="/category/toy">Toys</a> <span class="pull-right"><a href="/category/toy/asc" class='{% if order == "asc" %} active {% endif %}'><i class="fa fa-arrow-up"></i></a> <a href="/category/toy/desc" class='{% if order == "desc" %} active {% endif %}'><i class="fa fa-arrow-down"></i></a></span></li>
      <li class='list-group-item {% if category == "carrier" %} active {% endif %}'><a href="/category/carrier">Carriers</a> <span class="pull-right"><a href="/category/carrier/asc" class='{% if order == "asc" %} active {% endif %}'><i class="fa fa-arrow-up"></i></a> <a href="/category/carrier/desc" class='{% if order == "desc" %} active {% endif %}'><i class="fa fa-arrow-down"></i></a></span></li>
    </ul>
  </div>
</div>