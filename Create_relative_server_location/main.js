    // Connect ke JSON, tambahkan dengan keyword dari search teks
    // universityData.root_url = dari functions.php utk generate dynamic server address
    $.getJSON(universityData.root_url + '/wp-json/wp/v2/posts?search=' + this.searchField.val(), posts => {
      // console.log(posts[0].title.rendered);
      // Cek array search ada hasilnya atau tidak
      this.resultsDiv.html(`
        <h2 class="search-overlay__section-title">General Information</h2>
        ${posts.length ? '<ul class="link-list min-list">' : '<p>No general information matches that search.</p>'}
          ${posts.map(item => `<li><a href="${item.link}">${item.title.rendered}</a></li>`).join('')}
        ${posts.length ? '</ul>' : ''}
      `);
      this.isSpinnerVisible = false;
    });