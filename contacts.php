<?php include('core/init.php');?>
<?php
$db = new Database;
$db->query("SELECT * FROM `contacts`");
$contacts = $db->resultset();
?>
<div class="row">
		<div class="large-12 columns">
			<table>
				<thead>
					<tr>
						<th width="200">Nama</th>
						<th width="150">Email</th>
						<th width="200">No HP</th>
						<th width="200">Alamat</th>
						<th width="150">Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($contacts as $contact) : ?>
					<tr>
						<td><a href="contact.html"><?php echo $contact->first_name.' '.$contact->last_name; ?></a></td>
						<td><?php echo $contact->phone; ?></td>
						<td><?php echo $contact->email; ?></td>
						<td>
							<ul>
								<li><?php echo $contact->address1; ?></li>
								<li><?php if ($contact->address2) echo $contact->address2; ?></li>
							</ul>
						</td>
						<td>
							<ul class="button-group radius">
								<li>
									<a href="#" class="button tiny" data-reveal-id="editModal<?php echo $contact->id;?>" data-contact-id="<?php echo $contact->id; ?>">Edit</a>
									<div id = "editModal<?php echo $contact->id;?>" data-cid="<?php echo $contact->id; ?>" class="reveal-modal editModal" data-reveal>
										<h2>Tambah Kontak</h2>
				<form id="editContact" action="#" method="post">
					<div class="row">
						<div class="large-5 columns">
							<label>Nama depan
								<input name="first_name" type="text" placeholder="Masukkan nama depan anda" value="<?php echo $contact->first_name; ?>" />
							</label>
						</div>
						<div class="large-5 columns">
							<label>Nama belakang
								<input name="last_name" type="text" placeholder="Masukkan nama belakang anda" value="<?php echo $contact->last_name; ?>" />
							</label>
						</div>
					</div>
					<div class="row">
						<div class="large-4 columns">
							<label>Email
								<input name="email" type="email" placeholder="Masukkan alamat email anda" value="<?php echo $contact->email; ?>"/>
							</label>
						</div>
						<div class="large-4 columns">
							<label>No HP
								<input name="phone" type="text" placeholder="Masukkan nomor hp anda" value="<?php echo $contact->phone; ?>"/>
							</label>
						</div>
					</div>
					<div class="row">
						<div class="large-5 columns">
							<label>Alamat Asal
								<input name="address1" type="text" placeholder="Masukkan alamat asal anda" value="<?php echo $contact->address1; ?>"/>
							</label>
						</div>
						<div class="large-4 columns">
							<label>Alamat domisili
								<input name="address2" type="text" placeholder="Masukkan alamat domisili anda" />
							</label>
						</div>
						<div class="large-4 columns">
							<label>Notes
								<textarea name="notes" placeholder="Masukkan catatan tambahan"></textarea>
							</label>
						</div>
					</div>
					<input name="submit" type="submit" class="add-btn button right small" value="Submit">
						<a class="close-reveal-modal">&#215;</a>
				</form>
									</div>
								</li>
								<li><a href="#" class="button tiny [secondary alert success]">Delete</a></li>
							</ul>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>