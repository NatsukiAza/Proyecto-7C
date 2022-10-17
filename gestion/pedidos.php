<?php
	include('config/conexion.php');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/index2.css">
    <link rel="stylesheet" type="text/css" href="../css/queries.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title>Aromatic - Panel de control</title>
</head>
<body>

<?php include("navbar3.php"); ?>

	<div class="main-container">
		<?php include("layout/_directorios.php"); ?>
		<div class="body-page">
			<h2 style="text-align: center; margin-top: 1.7%;">Inicio / Pendientes de despacho</h2>
			<table id="maldito" class="mt10">
				<thead>
					<tr>
						<th style="text-align: center; width: 6%;">Código</th>
						<th style="text-align: center; width: 15%;">Usuario</th>
						<th style="text-align: center; width: 20%;">Producto</th>
						<th style="text-align: center; width: 15%;">Fecha</th>
						<th style="text-align: center; width: 9%;">Estado</th>
						<th style="text-align: center; width: 12%;">Dirección</th>
						<th style="text-align: center;">Teléfono</th>
						<th style="text-align: center; width: 6%;">Opciones</th>
					</tr>
				</thead>				
				<tbody>
					<?php
							$sql="SELECT ped.*,usu.*,pro.*,
							CASE WHEN ped.estado=2
							THEN 'Por pagar'
							ELSE 
								CASE WHEN ped.estado=3
									THEN 'Por entregar'
									ELSE
									CASE WHEN ped.estado=4
										THEN 'En camino'
										ELSE 'Otro'
									END
								END
							END estadotexto, ped.estado estadoped
							from pedido ped
							inner  join users usu
							on ped.user_id=usu.unique_id
							inner  join producto pro
							on ped.codpro=pro.codpro
							where ped.estado=2 or ped.estado=3 or ped.estado=4";
						$resultado=mysqli_query($con,$sql);
						while ($row=mysqli_fetch_array($resultado)) {
							echo 
					'<tr>
						<td style="text-align: center;" id="rosa">'.$row['codped'].'</td>
						<td>'.$row['unique_id'].' - '.$row['fname'].'</td>
						<td id="rosa">'.$row['codpro'].' - '.$row['nompro'].'</td>
						<td style="text-align: center;">'.$row['fecped'].'</td>
						<td id="rosa" style="text-align: center;">'.$row['estadotexto'].'</td>
						<td>'.$row['dirusuped'].'</td>
						<td id="rosa">'.$row['telusuped'].'</td>';
						if ($row['estadoped']==4) {
							echo
						'<td class="td-option">
							<button onclick="confirmar_entrega('.$row['codped'].')">Entregado</button>
						</td>';	
						}else{
							echo
						'<td class="td-option">
							<button onclick="despachado('.$row['codped'].')">Despachar</button>
						</td>';
						}
						echo
					'</tr>';
						}
					?>
				</tbody>
			</table>
		</div>
	</div>

	<?php include("footer3.php"); ?>

	<script type="text/javascript">
		function show_modal(id){
			document.getElementById(id).style.display="block";
		}
		function hide_modal(id){
			document.getElementById(id).style.display="none";
		}
		function despachado(codped){
			let fd=new FormData();
			fd.append('codped',codped);
			let request=new XMLHttpRequest();
			request.open('POST','api/pedido_confirm.php',true);
			request.onload=function(){
				if (request.readyState==4 && request.status==200) {
					let response=JSON.parse(request.responseText);
					console.log(response);
					if (response.state) {
						window.location.reload();
					}else{
						alert(response.detail);
					}
				}
			}
			request.send(fd);
		}
		function confirmar_entrega(codped){
			let fd=new FormData();
			fd.append('codped',codped);
			let request=new XMLHttpRequest();
			request.open('POST','api/pedido_confirm_entrega.php',true);
			request.onload=function(){
				if (request.readyState==4 && request.status==200) {
					let response=JSON.parse(request.responseText);
					console.log(response);
					if (response.state) {
						window.location.reload();
					}else{
						alert(response.detail);
					}
				}
			}
			request.send(fd);
		}
	</script>
</body>
</html>