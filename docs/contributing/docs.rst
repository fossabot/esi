Contributing to ESI Documentation
=================================

Firstly, thank you for considering contributing to esi. I really appreciate it!

Please see the relevant section on how to build the docs you are changing. Once you can build the docs please
familiarise yourself with either PHP doc blocks or restructured text documents to make changes.

.. note::

    The docs are built using `Sphinx <http://sphinx-doc.org>`_, `reStructuredText <http://sphinx-doc.org/rest.html>`_ and hosted by `ReadTheDocs <http://evemon.readthedocs.org>`_.

    Do not commit build files!

Building the Docs
-----------------

.. note::

    If you are using python version 3 or above please use pip3 when installing.

1. Download `python <https://www.python.org/downloads/>`_ version 2.7.x or higher.
2. If you are installing on Windows, make sure the Python install directory and the Python scripts directory have been added to the ``PATH`` environment variable.
3. Install pipenv for your python installation by running the following command:

    ``pip install pipenv``

4. Clone the repository to your local machine.

5. Inside the directory you have cloned the esi repository run the following command to install sphinx, sphinx-autobuild and the read the docs theme:

    ``pipenv install``

6. To enter into your pipenv environment run the following command:

    ``pipenv shell``

7. Inside the pipenv shell, navigate to the ``docs`` directory.

8. Inside the ``docs`` directory you can run the command:

    ``make html``

9. The generated docs should be in the ``./docs/_build/html`` directory from the esi parent directory. Open the ``index.html`` file in your browser to browse the generated docs.

Using ``sphinx-autobuild`` to view changes locally
--------------------------------------------------

`sphinx-autobuild <https://github.com/GaretJax/sphinx-autobuild>`_ runs a local web server and automatically refreshes whenever changes to the source files are detected.

1. Whilst inside the pipenv shell as documented above run the following command:

    ``sphinx-autobuild <path_to_docs> <output_directory>``

2. Browse to http://127.0.0.1:8000 to see the locally built documentation.
3. Hit ``^C`` to stop the local server.

Using ``sami`` to generate API documentation
--------------------------------------------

`sami <https://github.com/FriendsOfPHP/Sami>`_ is a php api documentation generator which parses php doc blocks into beautiful api documentation.

.. note::

    sami requires PHP version 7 or greater.

1. Install sami via the installation instructions found on sami's documentation.
2. Using the ``sami_config.php.dist`` rename it to ``sami_config.php``
3. To generate the documentation run the following command:

    ``php sami.phar update /path/to/config.php``
