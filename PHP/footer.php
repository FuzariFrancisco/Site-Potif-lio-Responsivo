</main>


		<footer>
			<div class="logo-rodape">
				<a href="index.php">
					<img src="images/Logo.png" alt="logo-rodape">
					<p>2019 Todos os Direitos Reservados</p>
				</a>
			</div>
		</footer>
    </div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="WOW-master/dist/wow.min.js"></script>
	<script>
		$(function(){	
			$('.toggle').click(function(){
				$('.layout').toggleClass('ativo');
				$(this).toggleClass('ativo');
			});

			$('.fecha-menu').click(function(){
				$('.layout').toggleClass('ativo');
				$(this).toggleClass('ativo');
			});

			new WOW().init();
		});
	</script>
</body>

</html>