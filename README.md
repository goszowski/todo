# Todo list

Request headers

-   Content-Type: application/json
-   Accept: application/json

## Tasks list

### Request

GET /tasks

### Response

```
{
	"tasks": {
		"current_page": 1,
		"data": [],
		"first_page_url": "{host}/tasks?page=1",
		"from": null,
		"last_page": 1,
		"last_page_url": "{host}/tasks?page=1",
		"links": [
			{
				"url": null,
				"label": "&laquo; Previous",
				"active": false
			},
			{
				"url": "{host}/tasks?page=1",
				"label": "1",
				"active": true
			},
			{
				"url": null,
				"label": "Next &raquo;",
				"active": false
			}
		],
		"next_page_url": null,
		"path": "{host}/tasks",
		"per_page": 15,
		"prev_page_url": null,
		"to": null,
		"total": 0
	}
}
```

## Create new task

### Request

POST /tasks

```
{
    "name": "Task name",
    "expires_at": "2023-08-01 15:35:01"
}
```

### Response

```
{
	"status": "success",
	"message": "task created"
}
```

## Get specific task

### Request

GET /tasks/{id}

### Response

```
{
	"task": {
		"id": 1,
		"name": "Task name",
		"expires_at": "2023-08-12T11:03:11.000000Z",
		"created_at": "2023-06-02T09:20:33.000000Z",
		"updated_at": "2023-06-02T09:20:33.000000Z"
	}
}
```

## Update specific task

### Request

PATCH /tasks/{id}

```
{
    "name": "New task name",
    "expires_at": "2023-08-02 15:35:01"
}
```

### Response

```
{
	"status": "success",
	"message": "task updated"
}
```

## Delete specific task

### Request

DELETE /tasks/{id}

### Response

```
{
	"status": "success",
	"message": "task deleted"
}
```
