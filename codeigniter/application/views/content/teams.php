<div class="col-md-8 offset-md-2">
    <h1 class="text-center">Teams</h1>
    <?php
    echo anchor('newTeam', '➕ add', 'class="btn btn-success"')
    ?>

    <ul class="list-group list-group-horizontal paginationNav">
        <li class="list-group-item">per page: </li>
        <?php
        for ($i = 5; $i <= 20; $i = $i + 5) {
            echo '<li class="list-group-item">' . anchor('teams/' . $i . '/1', $i) . '</li>';
        }
        ?>
    </ul>
    <?php

    $this->table->set_heading('Name', 'picture', $this->ion_auth->logged_in() ? 'edit' : null, $this->ion_auth->logged_in() ? 'delete' : null);

    foreach ($teams as $key => $row) {
        $this->table->add_row(
            $row->name,
            $row->image == "" ? '<img src="'. base_url().'assets/image/placeholder.png"' : $row->image
            //$this->ion_auth->logged_in() ? anchor('editTeam/'+$row->idteam, 'edit') : "null",
            //this->ion_auth->logged_in() ? anchor('deleteTeam/'+$row->idteam, 'delete') : "null"
        );
    }

    $template = array(
        'table_open'            => '<table class="table">',

        'thead_open'            => '<thead>',
        'thead_close'           => '</thead>',

        'heading_row_start'     => '<tr>',
        'heading_row_end'       => '</tr>',
        'heading_cell_start'    => '<th>',
        'heading_cell_end'      => '</th>',

        'tbody_open'            => '<tbody>',
        'tbody_close'           => '</tbody>',

        'row_start'             => '<tr>',
        'row_end'               => '</tr>',
        'cell_start'            => '<td>',
        'cell_end'              => '</td>',

        'row_alt_start'         => '<tr>',
        'row_alt_end'           => '</tr>',
        'cell_alt_start'        => '<td>',
        'cell_alt_end'          => '</td>',

        'table_close'           => '</table>'
    );

    //$this->table->set_template($template);

    echo $this->table->generate();
    ?>


    <nav aria-label="pagination">
        <?php echo $this->pagination->create_links(); ?>
    </nav>

    
</div>