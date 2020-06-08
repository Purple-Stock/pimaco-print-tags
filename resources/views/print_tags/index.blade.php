<title>Gerador de etiquetas Pimaco</title>
<button id='add_product' class="button is-success">Adicionar Novo Produto</button><br><br>
<form method="post" action="/generate-print-tags">
	@csrf
	<label for="pimaco">Escolha o formato da folha:</label>
	<select name="pimaco" id="pimaco">
		<option value="A4260">A4260</option>
		<option value="A4360">A4360</option>
	 	<option value="3080">3080</option>
		<option value="3081">3081</option>
		<option value="3082">3082</option>
		<option value="3180">3180</option>
		<option value="3181">3181</option>
		<option value="3182">3182</option>
		<option value="5580A">5580A</option>
		<option value="5580M">5580M</option>
		<option value="5580V">5580V</option>
		<option value="6080">6080</option>
		<option value="6081">6081</option>
		<option value="6082">6082</option>
		<option value="6083">6083</option>
		<option value="6084">6084</option>
		<option value="6085">6085</option>
		<option value="6086">6086</option>
		<option value="6087">6087</option>
		<option value="6088">6088</option>
		<option value="6089">6089</option>
		<option value="6092">6092</option>
		<option value="6093">6093</option>
		<option value="6094">6094</option>
		<option value="6095">6095</option>
		<option value="6180">6180</option>
		<option value="6181">6181</option>
		<option value="6182">6182</option>
		<option value="6183">6183</option>
		<option value="6184">6184</option>
		<option value="6185">6185</option>
		<option value="6187">6187</option>
		<option value="62580">62580</option>
		<option value="62581">62581</option>
		<option value="62582">62582</option>
		<option value="6280">6280</option>
		<option value="6281">6281</option>
		<option value="6282">6282</option>
		<option value="6283">6283</option>
		<option value="6284">6284</option>
		<option value="6285">6285</option>
		<option value="6286">6286</option>
		<option value="6287">6287</option>
		<option value="6288">6288</option>
		<option value="6293">6293</option>
		<option value="7088">7088</option>
		<option value="7089">7089</option>
		<option value="7188">7188</option>
		<option value="8096">8096</option>
		<option value="8098">8098</option>
		<option value="8099F">8099F</option>
		<option value="8099L">8099L</option>
		<option value="8196">8196</option>
		<option value="8296">8296</option>
		<option value="A4048">A4048</option>
		<option value="A4049">A4049</option>
		<option value="A4050">A4050</option>
		<option value="A4051">A4051</option>
		<option value="A4054">A4054</option>
		<option value="A4054R">A4054R</option>
		<option value="A4055">A4055</option>
		<option value="A4056">A4056</option>
		<option value="A4056R">A4056R</option>
		<option value="A4060">A4060</option>
		<option value="A4062">A4062</option>
		<option value="A4063">A4063</option>
		<option value="A4063R">A4063R</option>
		<option value="A4067">A4067</option>
		<option value="A4248">A4248</option>
		<option value="A4249">A4249</option>
		<option value="A4250">A4250</option>
		<option value="A4251">A4251</option>
		<option value="A4254">A4254</option>
		<option value="A4255">A4255</option>
		<option value="A4256">A4256</option>
		<option value="A4261">A4261</option>
		<option value="A4262">A4262</option>
		<option value="A4263">A4263</option>
		<option value="A4264">A4264</option>
		<option value="A4265">A4265</option>
		<option value="A4267">A4267</option>
		<option value="A4268">A4268</option>
		<option value="A4348">A4348</option>
		<option value="A4349">A4349</option>
		<option value="A4350">A4350</option>
		<option value="A4351">A4351</option>
		<option value="A4354">A4354</option>
		<option value="A4355">A4355</option>
		<option value="A4356">A4356</option>
		<option value="A4361">A4361</option>
		<option value="A4362">A4362</option>
		<option value="A4363">A4363</option>
		<option value="A4364">A4364</option>
		<option value="A4365">A4365</option>
		<option value="A4367">A4367</option>
		<option value="A4368">A4368</option>
	</select>
	<br>
	<div id='products'>
		<label for="product_name">Nome do produto:</label>
		<input type="text" name="product_name[]" required>
		<label for="quantity">Quantidade:</label>
		<input type="text" name="quantity[]" required>	
		<label for="price">Preço:</label>
		<input type="text" name="price[]" required>
		<br>		
	</div>
	<button class="button is-success">Gerar Impressão</button>
</form>

<script type="text/javascript">
document.querySelector('#add_product').addEventListener('click', function(){
	addFields('Nome do produto: ', 'product_name', 'product_name[]');
	addFields(' Quantidade: ', 'quantity', 'quantity[]');
	addFields(' Preço: ', 'price', 'price[]', 'br');

  	function addFields(textNode, forName, inputName, extra = null){
		products = document.querySelector('#products');
		let x = document.createElement("label").setAttribute("for", forName);
  		x.setAttribute("for", forName);
  		x.appendChild(document.createTextNode(textNode));	
  		products.appendChild(x);
	  	x = document.createElement("input");
  		x.setAttribute("type", "text");
  		x.setAttribute("name", inputName);
  		x.setAttribute("required", true);
  		products.appendChild(x);
  		if (extra) products.appendChild(document.createElement(extra));
  	}
});
</script>