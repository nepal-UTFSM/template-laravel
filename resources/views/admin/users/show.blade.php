<x-admin.resource.show
  model-name='user'
  :model="$user"
  :attrs="['id', 'name', 'email']"
  :query="false"
/>
