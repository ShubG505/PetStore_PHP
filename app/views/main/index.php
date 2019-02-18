{% include 'common/header.php' ignore missing %}
<div class="container">
    <div class="row">
        {% include 'common/left-sidebar.php' ignore missing %}
        <div class="col">
            <div class="row">
                {% for item in items %}
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img class="card-img-top" src="/img/600x400.png" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title"><a href="#" title="View Product">{{item.name}} {% if item.is_toy == 1  %} (Toy){% endif %}</a></h4>
                            <p class="card-text">{{item.description}}
                            {% set price = 0 %}
                            {% set offer = 0 %}
                            {% set age = 0 %}
                            {% set lifespan = 0 %}
                            {% for attribute in item.attributes %}
                                {% if attribute.name == "price"  %}
                                    {% set price = attribute.value %}
                                {% elseif attribute.name == "offer"  %}
                                    {% if (age >= lifespan/2) %}
                                        {% set offer = attribute.value %}
                                    {% else %}
                                        {% set offer = 0 %}
                                    {% endif %}
                                {% set offer = attribute.value %}
                                {% else %}
                                    {% if attribute.name == "age"  %}
                                        {% set age = attribute.value %}
                                    {% elseif attribute.name == "lifespan"  %}
                                        {% set lifespan = attribute.value %}
                                    {% endif %}
                                <br><b>{{attribute.label}}</b>: {{attribute.value}}
                                {% endif %}
                            {% endfor %}
                            </p>
                            <div class="row">
                                <div class="col">
                                    <p class="btn btn-danger btn-block">{% if offer > 0  %}<del>{% endif %} ${{price}} {% if offer > 0  %}</del>${{offer}}{% endif %}</p>
                                </div>
                                <div class="col">
                                    <a href="#" class="btn btn-success btn-block">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {% endfor %}
            </div>
        </div>
    </div>
</div>
{% include 'common/footer.php' ignore missing %}

