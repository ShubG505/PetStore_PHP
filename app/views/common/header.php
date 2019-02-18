<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Pet Store</title>
  <link rel="stylesheet" href="/css/global.css">
  <!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!------ Include the above in your HEAD tag ---------->

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="/">Pet Store</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
      <ul class="navbar-nav m-auto">
        <li class="nav-item {% if page == 'list' %} active {% endif %}">
          <a class="nav-link" href="/">Pets{% if page == 'list' %} <span class="sr-only">(current)</span>{% endif %}</a>
        </li>
        <li class="nav-item {% if page == 'add' %} active {% endif %}">
          <a class="nav-link" href="/main/add">Add Item{% if page == 'add' %} <span class="sr-only">(current)</span>{% endif %}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Cart</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>

      <form class="form-inline my-2 my-lg-0">
        <div class="input-group input-group-sm">
          <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Search...">
          <div class="input-group-append">
            <button type="button" class="btn btn-secondary btn-number">
              <i class="fa fa-search"></i>
            </button>
          </div>
        </div>
        <a class="btn btn-success btn-sm ml-3" href="#">
          <i class="fa fa-shopping-cart"></i> Cart
          <span class="badge badge-light">3</span>
        </a>
      </form>
    </div>
  </div>
</nav>
<section class="jumbotron text-center">
  <div class="container">
    <h1 class="jumbotron-heading"></h1>
  </div>
</section>
<div class="container">
  <div class="row">
    <div class="col">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Pets</a></li>
            {% if category|length > 0 %}
            <li class="breadcrumb-item active" aria-current="page">{{ category | capitalize }}</li>
            <li class="breadcrumb-item"><a href="/category/{{category}}/asc" class='{% if order == "asc" %} active {% endif %}'><i class="fa fa-arrow-up"></i></a> <a href="/category/{{category}}/desc" class='{% if order == "desc" %} active {% endif %}'><i class="fa fa-arrow-down"></i></a></li>
            <li class="breadcrumb-item">
                <form action="/category/filter/{{category}}" id="filter_form" method="post">
                    <div class="form-inline">
                        <select name="attribute_name_filter_id" class="form-control" >
                            {% for item in pet_attributes %}
                            <option value="{{ item.id }}" {% if filter.attribute_name_filter_id == item.id %} selected {% endif %}>{{ item.label }}</option>
                            {% endfor %}
                        </select>
                        <input type="text" name="attribute_name_filter_value" class="form-control" value="{{filter.attribute_name_filter_value}}" />
                        <select name="attribute_name_filter_order" class="form-control" >
                            <option value="asc" {% if filter.attribute_name_filter_order == "asc" %} selected {% endif %}>ASC</option>
                            <option value="desc" {% if filter.attribute_name_filter_order == "desc" %} selected {% endif %}>DESC</option>
                        </select>
                        <input type="submit" class="btn btn-info" name="Filter" value="Filter"/>
                    </div>
                </form>
            </li>
            {% else %}
            <li class="breadcrumb-item active" aria-current="page">Add Pet</li>
            {% endif %}
        </ol>

      </nav>
    </div>
  </div>
</div>