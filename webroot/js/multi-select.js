/**
 * Created by owner on 16-Jan-19.
 */


    $('#callbacks').multiSelect({
        afterSelect: function(values) {
        alert("Select value: " + values);
        },
        afterDeselect: function(values) {
        alert("Deselect value: " + values);
        }
        });


    $('#keep-order').multiSelect({ keepOrder: true });

    $('#public-methods').multiSelect();
    $('#select-all').click(function() {
        $('#public-methods').multiSelect('select_all');
        return false;
        });
    $('#deselect-all').click(function() {
        $('#public-methods').multiSelect('deselect_all');
        return false;
        });
    $('#select-100').click(function() {
        $('#public-methods').multiSelect('select', ['elem_0', 'elem_1'..., 'elem_99']);
        return false;
        });
    $('#deselect-100').click(function() {
        $('#public-methods').multiSelect('deselect', ['elem_0', 'elem_1'..., 'elem_99']);
        return false;
        });
    $('#refresh').on('click', function() {
        $('#public-methods').multiSelect('refresh');
        return false;
        });
    $('#add-option').on('click', function() {
        $('#public-methods').multiSelect('addOption', { value: 42, text: 'test 42', index: 0 });
        return false;
        });

    $('#optgroup').multiSelect({ selectableOptgroup: true });

    $('#disabled-attribute').multiSelect();

    $('#custom-headers').multiSelect({
        selectableHeader: "<div class='custom-header'>Selectable items</div>",
        selectionHeader: "<div class='custom-header'>Selection items</div>",
        selectableFooter: "<div class='custom-header'>Selectable footer</div>",
        selectionFooter: "<div class='custom-header'>Selection footer</div>"
        });

    $('#my-select, #pre-selected-options').multiSelect();