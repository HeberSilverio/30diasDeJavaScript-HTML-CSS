		let people = [];

		function addPerson() {
			const name = document.getElementById('name').value;
			const birthdate = new Date(document.getElementById('birthdate').value);
			const deathdate = document.getElementById('deathdate').value ? new Date(document.getElementById('deathdate').value) : null;
			people.push({ name, birthdate, deathdate });
			updateList();
			//clearForm();
		}

		function updateList() {
			const list = document.getElementById('personList');
			list.innerHTML = '';
			for (let person of people) {
				if (person.birthdate ) {
					const row = document.createElement('tr');
					row.innerHTML = `
						<td>${person.name}</td>
						<td>${formatDate(person.birthdate)}</td>
						<td>${person.deathdate ? formatDate(person.deathdate) : ''}</td>
					`;
					list.appendChild(row);
				}
			}
		}
      /*
		function clearForm() {
			document.getElementById('name').value = '';
			document.getElementById('birthdate').value = '';
			document.getElementById('deathdate').value = '';
		}
      */
		function formatDate(date) {
			const options = { year: 'numeric', month: 'long', day: 'numeric' };
			return date.toLocaleDateString('pt-BR', options);
		}
	