Opportunities
=============

All of the following examples use the following client:

.. code-block:: php

    $esiClient = \AGrimes94\Esi\EsiClient::create()->authenticate('ACCESS_TOKEN');

Get Completed Tasks
-------------------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/opportunities/
:Summary: Return a list of tasks finished by a character.
:Types: - int $characterId
:Default: None

.. code-block:: php

    $esiClient->opportunities()->getCompletedTasks(int $characterId);

Get Groups
----------

:HTTP Method: GET
:Endpoint: /opportunities/groups/
:Summary: Return a list of opportunities groups.
:Types: None
:Default: None

.. code-block:: php

    $esiClient->opportunities()->getGroups();

Get Group
---------

:HTTP Method: GET
:Endpoint: /opportunities/groups/{group_id}/
:Summary: Return information of an opportunities group.
:Types: - int $groupId
:Default: None

.. code-block:: php

    $esiClient->opportunities()->getGroup(int $groupId);

Get Tasks
---------

:HTTP Method: GET
:Endpoint: /opportunities/tasks/
:Summary: Return a list of opportunities tasks.
:Types: None
:Default: None

.. code-block:: php

    $esiClient->opportunities()->getTasks();

Get Task
--------

:HTTP Method: GET
:Endpoint: /opportunities/tasks/{task_id}/
:Summary: Return information of an opportunities task.
:Types: - int $taskId
:Default: None

.. code-block:: php

    $esiClient->opportunities()->getTask(int $taskId);
