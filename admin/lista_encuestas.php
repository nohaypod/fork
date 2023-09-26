<div class="wrap">
    <?php
            echo "<h1 class='wp-heading-inline'>" . get_admin_page_title() ."</h1>";
    ?>
    <a class="page-title-action">Añadir Nuevo</a>
    <br><br><br>

    <table class="wp-list-table widefat fixed striped pages">
        <thead>
            <th >Nombre de muchos algos</th>
            <th >Shortcode</th>
            <th >Acciones</th>
        </thead>
        <tbody id="the-list">
            <tr>
                <td>Nombre de algo</td>
                <td>[CODE]</td>
                <td>
                    <a class"page-title-action">[ Ver Datos ]</a>
                    <a class"page-title-action">[ Borrar ]</a>
                    <a class"page-title-action">[ Imprimir ]</a>
                    <a class"page-title-action">[ Botón de Juguete ]</a>   
                </td>

            </tr>
        </tbody>
    </table>

</div>