<?php
defined('EXECG__') or die('<h1>404 - <strong>Not Found</strong></h1>');
?>
<div id="main"> 
    <div class="maxcontent" id="content"> 
        <div id="fancybox-title" class="fancybox-title-float" style="display: block; z-index: 50"><table cellspacing="0" cellpadding="0" id="fancybox-title-float-wrap"><tbody>
        <tr><td id="fancybox-title-float-main">Detalles de orden de compra</td></tr></tbody></table></div>
        <div class="container" style="margin-bottom: 20px; margin-top: 10px">
    <table width="97%" cellspacing="0" cellpadding="2" border="0" bgcolor="#fff">
        <tbody><tr>
                <td align="center">
                    <table width="97%">
                        <tbody><tr>
                                <td>
                                    <p class="text2"></p>
                                </td>
                            </tr>
                        </tbody></table>
                    <table width="97%" cellspacing="1" cellpadding="0" border="0" bgcolor="#48598a">
                        <tbody><tr bgcolor="#ffffff">
                                <td>
                                    <table width="100%" cellspacing="0" cellpadding="6" border="0">
                                        <tbody><tr>
                                                <td align="left" width="70%" valign="top">
                                                    <p>Apreciable <b><?php echo $nombreUser; ?></b></p><p>Orden número: <b><?php echo $facturaNum; ?></b></p><p>Gracias
                                                        por afiliarce en resol SAS </br>
                                                    </p><p>Atentamente 
                                                    </p><p>Tu equipo resol S.A.S 
                                                    </p><table align="center" width="95%" border="0">
                                                        <tbody><tr>
                                                                <td>
                                                                    <table align="left" width="75%">
                                                                        <tbody><tr>
                                                                                <td width="35%">Nombre</td>
                                                                                <td><b><?php echo $nombreUser; ?></b></td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td>Estudiante No.</td>
                                                                                <td><b><?php echo $idUser; ?></b></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Orden No.</td>
                                                                                <td><b><?php echo $facturaNum; ?></b></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Periodo</td>
                                                                                <td><b><?php echo $mes; ?></b></td>
                                                                            </tr>    
                                                                            <tr>
                                                                                <td>Total puntos compra</td>
                                                                                <td><b><?php echo number_format($totales["puntos"],2,",",".") ?></b></td>
                                                                            </tr>   
                                                                        </tbody></table>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <table width="100%" cellspacing="0" style="text-align: center;">
                                                                        <tbody><tr class="headall">
                                                                                <th class="headinit" style="width: 60px;">Cantidad</th>
                                                                                <th class="head">Articulo</th> 
                                                                                <th class="head" style="width: 95px;">Código</th>                                                                                                                                                               
                                                                                <th class="head">Precio</th>
                                                                                <th class="head" style="width: 50px;">total</th>
                                                                            </tr>  
                                                                              <?php
                        if (sizeof($detalles) != 0) {
                            $estilo = 1;
                            foreach ($detalles as $key => $value) {
                                ?>
                        <tr class="class1">
                            <th class="init">
                                <?php echo $value["cantidad"]?>
                            </th>
                            <th class="item"> 
                                 <?php echo $value["nombre"] ?> 
                            </th>  
                            <th class="item">                                                                                        
                                 <?php echo $value["referencia"] ?> 
                            </th>                                                                                                           
                            <th class="item"> 
                                $<?php echo number_format($value["precioiva"],0,",",".") ?> 
                            </th>
                            <th class="item"> 
                                $<?php echo number_format($value["precioiva"]*$value["cantidad"],0,",",".") ?> 
                            </th>
                        </tr>  
                         <?php
                                if ($estilo == 1) {
                                    $estilo = 2;
                                } else {
                                    $estilo = 1;
                                }
                            }
                        }
                        ?>  
                                                                            <tr>
                                                                                <th colspan="4" style="text-align: right; padding: 10px; font-size: 14px;" >
                                                                                    <strong>PRECIO ANTES DE IVA</strong> 
                                                                                </th>
                                                                                <th class="init"> $<?php echo number_format($totales["subtotal"],0,",",".") ?></th>
                                                                            </tr>                                                                        
                                                                            <tr>
                                                                                <th colspan="4" style="text-align: right; padding: 10px; font-size: 14px;" >
                                                                                    <strong>IVA</strong>
                                                                                <th class="init"> $<?php echo number_format($totales["iva"],0,",",".") ?></th>
                                                                            </tr>
                                                                            <tr>
                                                                                <th colspan="4" style="text-align: right; padding: 10px; font-size: 14px;" >
                                                                                    <strong>TOTAL</strong>                                                                                    
                                                                                    <th class="init"> $<?php echo number_format($totales["total"],0,",",".") ?></th>                                                                              
                                                                            </tr>
                                                                        </tbody></table>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align="left">
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                        </tbody></table>
                                </td>
                            </tr>
                        </tbody></table>                
                    <table width="85%" cellspacing="0" cellpadding="6" border="0">
                        <tbody>
                            <tr style="color: #fff;">
                                <td><b></b></td>
                                <td colspan="2"><b></b></td>
                                <td colspan="2"><b></b></td>
                            </tr>
                            <tr bgcolor="#ffffff" class="text2">
                                <td align="left">
                                    <font size="3"><b>Ficha de deposito</b></font>
                                </td>
                                <td align="center">
                                    <font size="3"><b>NÚmero de cuenta</b></font>
                                </td>
                                <td align="center">
                                    <font size="3"><b>Banco</b></font>
                                </td> 
                                <td></td>
                                <td align="center">
                                    <font size="3"><b>Beneficiario</b></font>
                                </td>
                            </tr>
                            <tr bgcolor="#ffffff" class="text2">
                                <td align="center" valign="top"><img src="<?php echo $bogota; ?>"></td>
                                <td align="center" valign="top">
                                    <font size="3">084 827 851</font>
                                </td>
                                <td align="center" valign="top">
                                    <font size="3">
                                    Banco AV VILLAS
                                    </font>
                                </td>
                                <td></td>
                                <td align="center" valign="top">
                                    <font size="3">Fundación Red Misionera Internacional</font> 
                                </td>
                            </tr>
                            <tr bgcolor="#ffffff" class="text2">
                                <td align="left" valign="top" colspan="2">
                                    <font size="2">Usted puede pagar en cualquier oficna bancaria del grupo AVAL</font>
                                </td>
                                <td align="right" valign="top" colspan="2" class="text2">
                                    <font size="3"><b>Valor total:                                         
                                            $<?php echo number_format($totales["total"],0,",",".") ?>
                                    </b></font>
                                </td>
                                <td align="right" valign="top" class="text2">
                                    <font size="3"><b>Referencia: (<?php echo $facturaNum; ?>)
                                    </b></font>
                                </td>
                            </tr>
                            <tr style="color: #fff;">
                                <td>
                                    <b>Para confirmar el deposito</b></td>
                                <td colspan="2"><b>Email: compras.resol@gmail.com</b></td>
                                <td colspan="2"><b>Telefono: 5609479</b></td>
                            </tr>
                        </tbody>
                    </table>               
                </td>
            </tr>
            <tr>
                <td align="center">
                    <form action="index.php?controlador=Index&accion=Logo" target="contenido" method="post">
                        <button class="buscarButton"><?php $doc->texto('FINISH') ?></button>
                    </form>
                </td>
            </tr>


        </tbody>
    </table>
</div>
</div>
</div>