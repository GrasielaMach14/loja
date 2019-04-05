<!--Este arquivo irá carregar os formulários de cadastros dos produtos e alteração de produtos, deve ser instanciada nas paginas, é utilizado como base o formulário de alteração por ser mais completo-->

			<tr>
				<td>Nome:</td>
				<td><input class="form-control" type="text" name="nome" value="<?=$produto['nome']?>"></td>
			</tr>
			<tr>
				<td>Preço:</td>
				<td><input class="form-control" type="number" name="preco" value="<?=$produto['preco']?>"></td>
			</tr>
			<tr>
				<td>Quantidade:</td>
				<td><input class="form-control" type="number" name="quantidade" value="<?=$produto['quantidade']?>"></td>
			</tr>
			<tr>
				<td>Descrição:</td>
				<td><textarea class="form-control" name="descricao" value="<?=$produto['descricao']?>"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="checkbox" name="sustentavel" <?=$sustentavel?> value="true">Material sustentável</td>
			</tr>
			<tr>
				<td>Categorias:</td>
				<td>
					<select name="categoria_id" class="form-control">
							<?php foreach($categorias as $categoria) : 
								$selecionaCategoria = $produto['categoria_id'] == $categoria['id'];
								$selecao = $selecionaCategoria ? "selected = 'selected'" : "";?>
							<option value="<?=$categoria['id']?>" <?=$selecao?>><?=$categoria['nome']?></option>
							<?php endforeach ?>				
					</select>
				</td>
			</tr>