<x-admin.resource.index
  model-name='user'
  :models="$users"
  :attrs="['id', 'name', 'email']"
  :query="$query"
/>
