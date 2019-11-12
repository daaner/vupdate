<template>
  <div class="vue-dropdown">
    <a data-toggle="dropdown"
      class="dropdown-toggle"
      @click="toggleDropdown()"
    >
      <i class="icon icon-mail" style="font-size: 20px;"></i>
      <div class="noft-red" v-show="newDataCount > 0">{{ newDataCount }}</div>
    </a>

    <ul role="menu" class="dropdown-menu dropdown-wrap d-block" v-show="showMenu">
      <li v-show="!lists.lenght > 0">
        <a v-if="error">
          <span>
            {{ error }}
          </span>
        </a>
      </li>

      <li v-for="list in lists" class="bb">
        <p class="info">
          <strong>
            {{ list.title }}
          </strong>
          <small>
            {{ list.text }}
          </small>
        </p>
      </li>

      <li class="link">
          <a href="/all-information" title="Show all info" class="text-white">
            <div>
              Показать всю информацию
          </div>
          </a>
      </li>
    </ul>

  </div>
</template>

<script>
export default {
  data(){
    return {
      updateSecs: 30,
      showMenu: false,
      lists: [], //массив строчек
      item: 0, //последняя запись
      isRead: 0, //прочитал запись
      newDataCount: 0, //сколько новых строчек
      error: '', //сообщение об ошибке

    }
  },

  created() {
    this.getInfo()
    setInterval(this.getInfo, this.updateSecs * 1000)
  },

  mounted() {
    console.log('alert component')
  },

  methods: {
    toggleDropdown() {
      this.showMenu = !this.showMenu
    },

    getInfo() {
      if (this.lists.length > 0) {
        let key = this.lists.length -1
        this.item = this.lists[key].id
      }
      const [item, isRead] = [this.item, this.isRead];
      axios.post('/all-information', {
        item, isRead,
      }).then(res=>{
        this.error = ''

        if (res.data.success) {
          this.error = res.data.error
          this.lists = res.data.lists
          this.newDataCount = res.data.count
          console.log('success');
        } else {
          this.error = res.data.error
          this.lists = res.data.lists
          this.newDataCount = res.data.count
          console.log('no success');
        }
      })
      .catch(error => {
        this.lists = []
        this.error = 'Ошибка получения данных'
        this.newDataCount = 0
        // console.log('Произошла ошибка получения данных')
      });
    }


  }


}
</script>
