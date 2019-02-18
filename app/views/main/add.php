{% include 'common/header.php' ignore missing %}
<div class="container">
    <div class="row">
        {% include 'common/left-sidebar.php' ignore missing %}
        <div class="col">
            <div class="row">
                <div class="col-12">
                    {% if msg|length > 0 %}
                    <div class="alert alert-primary" role="alert">
                        {{msg}}
                    </div>
                    {% endif %}
                    <form action="/main/saveitem" method="post">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea class="form-control" id="description" name="description" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="item_type_id">Item Type:</label>
                            <select name="item_type_id" id="item_type_id" required>
                                <option value="">Choose Item Type</option>
                                {% for item in item_types %}
                                <option value="{{ item.id }}">{{ item.name }}</option>
                                {% endfor %}
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pet_type_id">Pet Type:</label>
                            <select name="pet_type_id" id="pet_type_id" required>
                                {% for item in pet_types %}
                                <option value="{{ item.id }}">{{ item.name }}</option>
                                {% endfor %}
                            </select>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" name="is_toy"> Is Toy</label>
                        </div>
                        {% for item in pet_attributes %}
                        <div class="form-group">
                            <label for="{{ item.name }}">{{ item.label }}:</label>
                            <input type="{{ item.type }}" class="form-control" id="{{ item.name }}" name="pet_attribute[{{ item.id }}]" {% if item.is_mandatory == 1 %} required {% endif %}>
                        </div>
                        {% endfor %}
                        <div class="form-group text-center">
                            <button type="reset" class="btn btn-danger">Reset</button>
                            <button type="submit" class="btn btn-info">Add New Pet</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
  $("#item_type_id").change(function() {
      // Documentation on getJSON: http://api.jquery.com/jQuery.getJSON/
      $.getJSON("/main/pettypes/" + $("#item_type_id").val(), null, function (data) {
        $("#pet_type_id").html('');
        $.each(data, function (i, item) {
          // Create and append the new options into the select list
          $("#pet_type_id").append("<option value=" + item.id + ">" + item.name + "</option>");
        });
      });
  });
</script>
{% include 'common/footer.php' ignore missing %}
