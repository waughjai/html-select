HTML Select
=========================

Simple class for easily generating select tags.

1st argument is an array of options, which can either be associative or linear. Associative will use the key as the value attribute & value as the name, linear will use the index as the value attribute & the value as the name. If it’s an array of arrays, then it will check to see if that array has “value” & “name” keys & try to use the values of those. To set an option as selected, add a key “selected” with the value true.

The 2nd argument is an associative list of attributes for the select tag.

## Example

    use WaughJ\HTMLSelect\HTMLSelect;

    echo new HTMLSelect
    (
        [
            [ 'value' => 'one', 'name' => 'One' ],
            [ 'value' => 'two', 'name' => 'Two', 'selected' => true ],
            [ 'value' => 'three', 'name' => 'Three', ]
        ],
        [ 'class' => 'select', 'id' => 'select-1' ]
    );

Will output:

    <select class="select" id="select-1">
        <option value="one">One</option>
        <option value="two" selected="selected">Two</option>
        <option value="three">Three</option>
    </select>

## Changelog

### 0.1.0
* Initial release