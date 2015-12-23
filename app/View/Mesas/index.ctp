<h2>Lista de Mesas</h2>
<?php echo $this->Html->link('Crear Nueva Mesa', array('controller' => 'Mesas', 'action' => 'nuevo')) ?>
<table>
    <tr>
        <td>Serie</td>
        <td>Puestos</td>
        <td>Posicion</td>
        <td>Creado</td>
        <td>Modificado</td>
        <td>Responsable</td>
        <td>Editar</td>
        <td>Eliminar</td>        
    </tr>
    
    <?php foreach($mesas as $mesa): ?>
    <tr>
        <td><?php echo $mesa['Mesa']['serie']; ?></td>
        <td><?php echo $mesa['Mesa']['puestos']; ?></td>
        <td><?php echo $mesa['Mesa']['posicion']; ?></td>
        <td><?php echo $this->Time->format('d-m-Y h:i A',$mesa['Mesa']['created']); ?></td>
        <td><?php echo $this->Time->format('d-m-Y h:i A',$mesa['Mesa']['modified']); ?></td>
        <td><?php echo $this->Html->link($mesa['Mesero']['nombre'] . ' ' . $mesa['Mesero']['apellido'],
            array('controller' => 'Meseros', 'action' => 'ver', $mesa['Mesero']['id'])); ?> </td>  
        <td><?php echo $this->Html->link('Editar', array('controller' => 'Mesas', 'action' => 'editar', 
            $mesa['Mesa']['id'])); ?></td>
        <td><?php echo $this->Form->postLink('Eliminar', array('action' => 'eliminar', $mesa['Mesa']['id']), 
            array('confirm' => 'Eliminar mesa ' . $mesa['Mesa']['serie'])); ?></td>
    </tr>
    
    <?php endforeach; ?>
    
    <pre><?php // print_r($mesas) ?></pre>
    
</table>
