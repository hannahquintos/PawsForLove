# Paws For Love

## Project Overview

The Laravel CMS project I created is called Paws For Love and is a dog adoption platform. Anonymous users can browse through a list of dogs available for adoption and learn more about each of the dogs. Admin users can log in to access the dashboard and manage the dogs and breeds in the database.

## Features

Anonymous users have read functionality, allowing them access to pages to view all the dogs in the system and view information about an individual dog in more detail. The website also has a login feature for admin users. Like anonymous users, admin users have read functionality. These users can view all the dogs in the system as well as all the breeds. They can also view a list of all the dogs that are a specific breed. Additionally, admin users can add new dogs and breeds, update their information, and delete them from the database.

## Database Schema

My project has two main tables, a dogs table and a breeds table. The dogs table stores information about the dogs available for adoption and the breeds table stores information about the different dog breeds. These two tables have a one to many relationship. A dog belongs to one breed and a breed can have many dogs. This relationship is identified by the foreign key, breed_id, in the dogs table.

## User Flow

### Anonymous Users
#### Dog List Page:
<img src="/_readme/dog-list.png" width="600">

#### Dog Show Page:
<img src="/_readme/dog-show.png" width="600">

### Admin Users
#### Login Page:
<img src="/_readme/login.png" width="600">

#### Dog List Page:
<img src="/_readme/admin-dog-list.png" width="600">

#### Create Dog Page:
<img src="/_readme/admin-dog-create.png" width="600">

#### Dog Show Page:
<img src="/_readme/admin-dog-show.png" width="600">

#### Dog Edit Page:
<img src="/_readme/admin-dog-edit.png" width="600">

#### Breed List Page:
<img src="/_readme/admin-breed-list.png" width="600">

#### Breed Show Page:
<img src="/_readme/admin-breed-show.png" width="600">

## Thoughts on Laravel
I thought Laravel was relatively simple to understand. I think it really helped that we were already familiar with the MVC architecture from working with ASP.NET. I also appreciate the built in functionalities Laravel offers.
